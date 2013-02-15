<?php
class PhenotypeComponent_9 extends PhenotypeComponent{
    public $com_id = 9;
    public $name = "Tabelle";
    public function setDefaultProperties(){
        $this->set("_revision",1);
        $this->set("table_count_x",4);
        $this->set("table_count_y",2);
    }
    public function initForm($context){
        global $myDB,$spalten;
        $this->form_selectbox('Typ','type',array(0=>'Basis',1=>'Preistabelle'));
        $this->form_wrap("displayEditTable");
    }
    

    public function displayEditTable(){
        global $myRequest;
        $formname = $this->formid."table";
        $max_columns =10;
        
        ?>
        <script type="text/javascript" src="<?=ADMINURL?>lib/redactor/redactor.min.js"></script>
        <table width="408" border="0" cellpadding="0" cellspacing="0" class="<?=$class?>"> 
        <tr> 
        <?php 
        $x = ceil(73/$this->get("table_count_x"));
        for ($j=1;$j<=$this->get("table_count_x");$j++)
        { 
        ?>         
        <td width="<?php echo $x ?>%"><?php if ($this->get("table_count_x")>1){ ?><input type="image" src="img/b_minus.gif" alt="Remove column" width="18" height="18" border="0" name="<?php echo $formname?>_minus_c<?php echo $j ?>"><?php } ?><?php if($this->get("table_count_x")<$max_columns){ ?><input type="image" src="img/b_plus.gif" alt="Add Column" width="18" height="18" border="0" name="<?php echo $formname  ?>_plus_c<?php echo $j ?>"><?php } ?></td>
        <?php 
        }
        ?> 
        <td width="7%" align="right" nowrap>&nbsp;</td> 
        </tr> 
        <?php 
        for ($i=1;$i<=$this->get("table_count_y");$i++)
        {
        ?> 
        <tr> 
        <?php 
        for ($j=1;$j<=$this->get("table_count_x");$j++)
        {
        ?> 
        <td><textarea name="<?php echo $formname ?>_content_x<?php echo $j ?>_y<?php echo $i ?>" class="input RichText" wrap="physical" id="com_<?=$this->id.'_'.$j.'_'.$i?>" style="width: 200px;height: 55px"><?php echo $this->getH("table_content_x".$j."_y".$i) ?></textarea></td> 
        
        <script type="text/javascript">
		/*var oFCKeditor = new FCKeditor( 'com_<?=$this->id.'_'.$j.'_'.$i?>' ) ;
		oFCKeditor.BasePath	= '/_phenotype/admin/lib/fckeditor/fckeditor/' ;
		oFCKeditor.Width = 250;
		oFCKeditor.Height = document.getElementById('com_<?=$this->id.'_'.$j.'_'.$i?>').offsetHeight+100 ;
		oFCKeditor.Config["CustomConfigurationsPath"] = "/_phenotype/admin/lib/fckeditor/conf_rtf/default.js";
		oFCKeditor.ReplaceTextarea() ;*/
		$('#com_<?=$this->id.'_'.$j.'_'.$i?>').redactor();
		</script>
        <?php 
        }
        ?> 
        <td  nowrap> 
        <?php if ($this->get("table_count_y")>1){ ?> 
        <input type="image" src="img/b_minus.gif" alt="Remove Row" width="18" height="18" border="0" name="<?php echo $formname  ?>_minus_r<?php echo $i ?>"><?php } ?><input type="image" src="img/b_plus.gif" alt="Add Row" width="18" height="18" border="0" name="<?php echo $formname  ?>_plus_r<?php echo $i ?>"> 
        </td> 
        
        </tr> 
        <?php 
        }
        ?> 
        </table><br/> 
        
        <?php
       
        
    
    }
    
    public function update($context){
        parent::update($context);
        
        global $myRequest;

        $formname = $this->formid."table";
        $this->set("visible".$formname,$myRequest->get('visible_'.$formname));
        
        $count_y = $this->get("table_count_y");
        $count_x = $this->get("table_count_x");
        $put_y=1;
        for ($i=1;$i<=$count_y;$i++)
        {
            $put_x = 1;
            for ($j=1;$j<=$count_x;$j++)
            {
                $fname = "table_content_x" . $j . "_y" . $i;
                $this->set("table_content_x" . $put_x . "_y" . $put_y,$this->fget($fname));
                $put_x++;

            }
            $put_y++;

            // New row ?
            $fname = $formname . "_plus_r" . $i . "_x";
            if ($myRequest->check($fname))
            {
                $this->set("table_count_y",$count_y+1);
                for ($k=1;$k<=$count_x;$k++)
                {
                    $this->set("table_content_x" . $k . "_y" . $put_y,"");
                }
                $put_y++;
            }
            // -- New row ?

            // Deletion of row ?
            $fname = $formname . "_minus_r" . $i . "_x";
            if ($myRequest->check($fname))
            {
                $this->set("table_count_y",$count_y-1);
                $put_y--;
                for ($k=1;$k<=$count_x;$k++)
                {
                    $this->clear("table_content_x".$k."_y".$count_y);
                }
            }
            // -- Deletion of row ?
        }

        for ($i=1;$i<=$count_x;$i++)
        {
            // New column ?
            $fname = $formname . "_plus_c" . $i ."_x";
            if ($myRequest->check($fname))
            {
                for ($k=$count_x;$k>$i;$k--)
                {
                    for ($l=1;$l<=$count_y;$l++)
                    {
                        $s = $this->get ("table_content_x" . $k . "_y" .$l);
                        $this->set("table_content_x" . ($k+1) . "_y" . $l,$s);
                    }
                }
                for ($l=1;$l<=$count_y;$l++)
                {
                    $this->set("table_content_x" . ($i+1) . "_y" . $l,"");
                }
                $this->set("table_count_x",$count_x+1);
            }
            // -- New column ?

            // Deletion of column
            $fname = $formname . "_minus_c" . $i . "_x";
            if ($myRequest->check($fname))
            {
                for ($k=$i;$k<$count_x;$k++)
                {
                    for ($l=1;$l<=$count_y;$l++)
                    {
                        $s = $this->get ("table_content_x" . ($k+1) . "_y" .$l);
                        $this->set("table_content_x" . ($k) . "_y" . $l,$s);
                    }
                }
                $this->set("table_count_x",$count_x-1);
                for ($l=1;$l<=$count_y;$l++)
                {
                    $this->clear("table_content_x".$count_x."_y".$l);
                }
                
            }
            // -- Deletion of column ?
        }
        $formname_sec = $this->formid."table";
        $this->set("visible_sec".$formname_sec,$myRequest->get('visible_sec_'.$formname_sec));
        
        $count_sec_y = $this->get("table_count_sec_y");
        $count_sec_x = $this->get("table_count_sec_x");
        $put_y=1;
        for ($i=1;$i<=$count_sec_y;$i++)
        {
            $put_x = 1;
            for ($j=1;$j<=$count_sec_x;$j++)
            {
                $fname = "table_content_sec_x" . $j . "_y" . $i;
                $this->set("table_content_sec_x" . $put_x . "_y" . $put_y,$this->fget($fname));
                $put_x++;

            }
            $put_y++;

            // New row ?
            $fname = $formname_sec . "_plus_r" . $i . "_x";
            if ($myRequest->check($fname))
            {
                $this->set("table_count_sec_y",$count_sec_y+1);
                for ($k=1;$k<=$count_sec_x;$k++)
                {
                    $this->set("table_content_sec_x" . $k . "_y" . $put_y,"");
                }
                $put_y++;
            }
            // -- New row ?

            // Deletion of row ?
            $fname = $formname_sec . "_minus_r" . $i . "_x";
            if ($myRequest->check($fname))
            {
                $this->set("table_count_sec_y",$count_sec_y-1);
                $put_y--;
                for ($k=1;$k<=$count_sec_x;$k++)
                {
                    $this->clear("table_content_sec_x".$k."_y".$count_sec_y);
                }
            }
            // -- Deletion of row ?
        }

        for ($i=1;$i<=$count_sec_x;$i++)
        {
            // New column ?
            $fname = $formname_sec . "_plus_c" . $i ."_x";
            if ($myRequest->check($fname))
            {
                for ($k=$count_sec_x;$k>$i;$k--)
                {
                    for ($l=1;$l<=$count_sec_y;$l++)
                    {
                        $s = $this->get ("table_content_sec_x" . $k . "_y" .$l);
                        $this->set("table_content_sec_x" . ($k+1) . "_y" . $l,$s);
                    }
                }
                for ($l=1;$l<=$count_sec_y;$l++)
                {
                    $this->set("table_content_sec_x" . ($i+1) . "_y" . $l,"");
                }
                $this->set("table_count_sec_x",$count_sec_x+1);
            }
            // -- New column ?

            // Deletion of column
            $fname = $formname_sec . "_minus_c" . $i . "_x";
            if ($myRequest->check($fname))
            {
                for ($k=$i;$k<$count_sec_x;$k++)
                {
                    for ($l=1;$l<=$count_sec_y;$l++)
                    {
                        $s = $this->get ("table_content_sec_x" . ($k+1) . "_y" .$l);
                        $this->set("table_content_sec_x" . ($k) . "_y" . $l,$s);
                    }
                }
                $this->set("table_count_sec_x",$count_sec_x-1);
                for ($l=1;$l<=$count_sec_y;$l++)
                {
                    $this->clear("table_content_sec_x".$count_sec_x."_y".$l);
                }
                
            }
            // -- Deletion of column ?
        }

    }
 function render($context)
    {
        global $myPT,$myDB;
        eval ($this->initRendering());
        $myPT->startBuffer();
        $width = (int)100/$this->get("table_count_x");
        switch($this->getI('type')) {
        	case 3:		$class	=	'tworows';
        				break;
        	case 2:		$class	=	'prices';
        				break;
        	case 1:		$class	=	'pricing';
        				break;
        	case 0:	
        	default:	$class	=	'';
        }
        ?>
        <table class="<?=$class?>" width="100%" border="0" cellspacing="10" cellpadding="0"> 
        <?php 
        for ($i=1;$i<=$this->get("table_count_y");$i++)
        {
        if($i===1 && $this->getI('type') !== 1 && $this->getI('type') !== 3) {
        ?>
        <thead>
        <?php
        } elseif($i===2 && $this->getI('type') !== 1 && $this->getI('type') !== 3) {
        ?>
        <tbody>
        <?php
        }
        ?>
        <tr> 
        <?php 
        for ($j=1;$j<=$this->get("table_count_x");$j++)
        {
              # if($this->get("table_content_x".$j."_y".$i)){
            if($j==1) {
	            $td1 = '<td width="58%">';
            } else {
	            $td1 = '<td>';
            }
            $td2 = '</td>';
            
             /*  if ($j==1)
            {     
               
                    $td1 = '<td>';
                    $td2 = '</td>';            }*/
            
            if ($i==1 && $this->getI('type') !== 1 && $this->getI('type') !== 3)
            {
                $td1 = '<th>';
                $td2 = '</th>';
            }
            if($i==1) {
	            $td1 .= '<strong>';
	            $td2 = '</strong>'.$td2;
            }
          # }
        ?> 
        <?php echo $td1 ?><?php echo ($this->get("table_content_x".$j."_y".$i) != '') ? strip_tags($this->get("table_content_x".$j."_y".$i),'<strong><b>'):'&nbsp;'; ?><?php echo $td2 ?>
        <?php 
        }
        ?> 
        </tr> 
        <?php     
        if($i===1 && $this->getI('type') !== 1 && $this->getI('type') !== 3) {
        ?>
        </thead>
        <?php
        } elseif($i===$this->get("table_count_y") && $this->getI('type') !== 1 && $this->getI('type') !== 3) {
        ?>
        </tbody>
        <?php
        }    
        }
        ?> 
        </table>
        
        <?

         $table = $myPT->stopBuffer();
        $formname = $this->formid."table";
        $mySmarty->assign("table",$table);
        $html = $mySmarty->fetch($TPL_1);
        return $html;
    }
    
}