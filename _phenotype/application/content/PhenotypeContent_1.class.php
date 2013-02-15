<?php
/**
 * Galerie
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeContent_1 extends PhenotypeContent{
    var $content_type = 1;
    var $skins = Array ();

    var $_blocks = Array ("Eigenschaften");
    var $_icons = Array ("b_konfig.gif");
    
    protected $dat_id_min = 1000;
    protected $dat_id_max = 1999;
    
    function setDefaultProperties()
    {
    	$this->set("bez","Neue Galerie");
    	$this->set("name","");
    	$this->set('date',time());
    	$this->set("desc","");
    	$this->set("anzahl", 0);
    }

    function init($row, $block_nr = 0)
    {
        parent :: init($row, $block_nr);
        // Reiter mit den Anzahl der Bilder mitwachsen lassen
        $anzahl = $this->getI("maximage");
        $seiten = floor($anzahl / 10) + 1;

        for ($i = 1; $i <= $seiten; $i ++)
        {
            $this->_blocks[] = ($i -1) * 10 + 1;
            $this->_icons[] = "b_konfig.gif";
        }

        // Hier das Formular und damit auch die Updatefunktion initialisieren
        if ($block_nr == 0)
        {
        	global $myDB;
        	$sql 	= 'SELECT DISTINCT(`med_logical_folder1`) FROM `media` ORDER BY `med_logical_folder1`';
        	$rs		=	$myDB->query($sql);
        	$gals	=	array();
        	if(mysql_num_rows($rs)) {
	        	while($row=mysql_fetch_assoc($rs)) {
		        	$gals[$row['med_logical_folder1']]	=	$row['med_logical_folder1'];
	        	}
        	}
        
        	$this->form_textfield("Bezeichnung","name",200);
        	$this->form_richtext("Beschreibung","desc",400,10);
        	$this->form_selectbox('Basis-Import','base_import',$gals);
        	$this->form_date('Datum','date');
            if ($anzahl > 1) {
            	$uplift = ($block_nr -1) * 10;
                $this->form_headline("Bildreihenfolge");
                $_position = Array ();
                for ($i = 1; $i <= $anzahl; $i ++) {
                    if ($this->get("view".$i)==1) {
                        $_position[] = $this->getI("image".$i."_img_id");
                    }
                }
              	if($this->getI('anzahl')<1){
                	$this->set('anzahl',1);
            	}
            	$this->clear("ddimageorder");
            	$this->form_ddpositioner('', 'ddimageorder', $anzahl, 'dd_thumb');
            }
        }

        if ($block_nr > 0) {
            $uplift = ($block_nr -1) * 10;
            for ($i = 1; $i <= 10; $i ++) {
                $this->form_headline("Bild ". ($i + $uplift));
                $this->form_textfield("Titel/Alt-Text", "titel". ($i + $uplift), 400);
                //$this->form_textarea("Beschreibung", "text". ($i + $uplift), 400, 2);
                if($this->get('name')) {
	                $name = urlstrip($this->get('name'));
                } else {
	                $name = "Galeriebilder".$this->id;
                }
                $this->form_image_selector("Bild", "image". ($i + $uplift), $name, 1);
                $this->form_checkbox("","view". ($i + $uplift),"anzeigen",1);
            }
        }
    }

    function attachKeyFields() {
    	$this->setKey1($this->get("datum"));
        $this->setKey2($this->get("wann"));
        if(!$this->get("bis") || $this->get("bis") <= $this->get("wann")) {
            $this->setKey3($this->get("wann"));
        } else {
            $this->setKey3($this->get("bis"));
        }

        if($this->get("tbild_img_id")) {
            $this->setThumbnail($this->get("tbild_img_id"));
        }
    }

    function store() {
        global $mySUser;
        global $myRequest;
        global $myDB;
       
       if($this->get('base_import') != '') {
	        	$gal 	=	$this->get('base_import');
	        	$this->set('base_import','');
	        	
	        	$sql	=	'SELECT `med_id` FROM `media` WHERE `med_logical_folder1` = "'.$gal.'" ORDER BY `med_creationdate`';
	        	$rs		=	$myDB->query($sql);
	        	
	        	$images	=	array();
	        	
	        	if(mysql_num_rows($rs)) {
	        		$i = 1;
	        		while($row=mysql_fetch_assoc($rs)) {
		        		$this->set('image'.$i.'_img_id',$row['med_id']);
		        		$this->set('view'.$i,1);
		        		$i++;
		        	}
		        	$this->set('maximage',(int)$i);
	        	}
        	}
        
        $this->precalcImages();

        if ($myRequest->getI("b") == 1) {
            $anzahl = $this->getI("maximage");
            // Nachsehen, ob neue Bilder hinzugefŸgt wurden
            $pfad = TEMPPATH."contentupload/".$this->content_type."/".$mySUser->id."/bilder/";
            $fp = @ opendir($pfad);
            $_files = Array ();
            if ($fp) {
            	while ($file = readdir($fp)) {
                    if ($file != "." && $file != "..") {
                        if (substr($file, 0, 2) != "t_") {
                            $_files[] = $file;
                        }
                    }
                }
            }

            if (count($_files != 0)) {
                asort($_files);
                $myMB = new PhenotypeMediabase();
                $i = $this->get("maximage");
                foreach ($_files AS $file) {
                    $i ++;
                    if (!file_exists($pfad."t_".$file)) {
                        $myMB->createThumbnailFromJpeg($pfad.$file, $pfad."t_".$file, 100);
                    }
                    $med_id = $myMB->import($file, 0, "Galerie/Upload ".$this->id, $pfad);
                    $this->set("image".$i."_img_id", $med_id);
                    $this->set("view".$i,1);

                    $myMB->importImageVersionFromUrl($pfad."t_".$file,"thumb",$med_id);
                    //$med_id = $myMB->import("t_".$file, 0, "Galerie/WDR 2/".$this->id, $pfad);
                    //$this->set("small".$i."_img_id", $med_id);
                }
                $this->precalcImages();
            }

            // Auf die erste Seite mit einem neuen Bild springen,
            // falls neue Bilder hinzugefŸgt wurden
            if ($this->getI("maximage")!=$anzahl) {
                $seiten = floor(($anzahl+1) / 10) + 1;
                $this->setAlternateUpdateUrl("content_edit.php?id=".$this->id."&uid=".$this->uid."&b=". ($seiten +1));
            }

            // Ordner anschlie§end leeren
            $pfad = TEMPPATH."contentupload/".$this->content_type."/".$mySUser->id."/bilder/";
            $fp = @ opendir($pfad);
            if ($fp) {
                while ($file = readdir($fp)) {
                    if ($file != "." && $file != "..") {
                        unlink ($pfad . $file);
                    }
                }
            }
        }

        if ($myRequest->getI("b") == 0 AND is_array($this->get("ddimageorder"))) {
            $_position = $this->get("ddimageorder");
            $_images = Array ();
            $neworder = array();
            for($i=1;$i<(count($_position)+1);$i++) {
           		// build array
           		$_images[$i]['img_id'] = $this->getI("image".$_position[$i-1]."_img_id");
           		$_images[$i]['titel'] = $this->get("titel".$_position[$i-1]);
           		$_images[$i]['text'] = $this->get("text".$_position[$i-1]);
           		$_images[$i]['view'] = 1;
           		if($i <= count($_position)) {
           			$neworder[$i-1] = $_position[$i-1];
           		}
            }
            
            for($i=(count($_images)+1);$i<$this->get("maximage");$i++) {
            	// add not viewable
            	$_images[$i]['img_id'] = $this->getI("image".$_position[$i]."_img_id");
            	$_images[$i]['titel'] = $this->get("titel".$_position[$i]);
            	$_images[$i]['text'] = $this->get("text".$_position[$i]);
            	$_images[$i]['view'] = 0;
            }
            
            for($i=1;$i<(count($_images)+1);$i++) {
            	// set new values
            	$this->set("image".$i."_img_id",$_images[$i]['img_id']);
            	$this->set("titel".$i,$_images[$i]['titel']);
            	$this->set("text".$i,$_images[$i]['text']);
            	$this->set("view".$i,$_images[$i]['view']);
            }
            
            //$this->set("ddimageorder",$neworder);
            $this->precalcImages();
        }
        $this->set("bez",$this->get("name"));
        parent :: store();
    }

    function precalcImages() {
        // to minimze db queries when displaying the gallery an array with all necessary
        // informations is precalculated and stored as a content object property
        
        $j = 0;
        $max = 0;
        $_images = Array ();
        $i=1;
        $finish==false;
        $fin=0;
        while ($finish==false) {
            if ($this->getI("image".$i."_img_id") != 0 AND $this->getI("view".$i)==1) {
                $j ++;
                $titel = $this->get("titel".$i);
                $text = $this->get("text". $i);

                $myImg = new PhenotypeImage($this->getI("image".$i."_img_id"));
                $url = $myImg->url;
                $big = $myImg->physical_folder."/".$myImg->filename;
				
				if($i==1) {
					if($myImg->x > 242) {
						$x = 242;
						$y = intval($myImg->y * $x / $myImg->x);
					} else {
						$x = $myImg->x;
						$y = $myImg->y;
					}
				} else {
					if($myImg->x >= $myImg->y) {
						$x = 119;
						$y = intval($myImg->y * $x / $myImg->x);
					} else {
						$y = 119;
						$x = intval($myImg->x * $y / $myImg->y);
					}
				}
				
                // $x = $myImg->x;
                // $y=$myImg->y;
               	$id = $this->getI('image'.$i.'_img_id');
                $myImg->selectVersion("thumb");
                $small = $myImg->physical_folder."/".$myImg->filename;
                $small = $myImg->thumburl;
                $_image = Array ($titel, $text, $small,$big,$x,$y,$url,$id);
                $_images[$j] = $_image;

                $fin=0;
            } else {
            	$fin++;
            }
            
            if($fin>=10) {
            	$finish=true;
            }
            $max=$i;
            $i++;
        }
        $max=$max-10;
        $this->set("anzahl", $j);
        $this->set("maximage", $max);
        $this->set("precalc", $_images);
    }

    function dd_thumb($i) {

        if ($this->getI("image".$i."_img_id") != 0) {
            $big = $this->getI("image".$i."_img_id");
            $myImg = new PhenotypeImage($big);
            $myImg->display_maxX(250);
        } else {
            echo "Kein Bild zugeordnet.";
        }
    }
}
?>