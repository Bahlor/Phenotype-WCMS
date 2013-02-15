<?php
/**
 * Seitenbaum Ausgabe
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_12 extends PhenotypeComponent
{
  public $com_id = 12;

  public $name = "Seitenbaum-Ausgabe"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
 	global $myDB;
 	
 	$sql 	= 	'SELECT `pag_id`,`pag_bez` FROM `page` WHERE `pag_status` = "1" ORDER BY `pag_bez`';
 	$rs		=	$myDB->query($sql);
 	$pages	=	array();
 	if(mysql_num_rows($rs)) {
 		while($row=mysql_fetch_assoc($rs)) {
 			$pages[$row['pag_id']]	=	$row['pag_bez'];
 		}
 	}
 	
 	$this->form_selectbox('Seitenbaum','page',$pages);
 	$this->form_selectbox('Headline entfernen?','headlines',array(	0	=>	'No',	1	=>	'Yes'));
 	$this->form_selectbox('Erstes öffnen?','open',array(	0	=>	'No',	1	=>	'Yes'));
 	$this->form_selectbox('Accordion?','accordion',array(	0	=>	'No',	1	=>	'Yes'));
  }

  public function render($context)
  {
  	global $myPage;
	// Example:
		
	// Initialize template access (=>$mySmarty)  
	if($this->getI('page') > 0) {
    	eval ($this->initRendering());
    	
    	$nav	=	new PhenotypeNavigationHelper();
    	$pags	=	$nav->getSubPages($this->getI('page'));
		$pages	=	array();
		
		foreach($pags as $p) {
			$page			=	new PhenotypePage;
			$page->init($p);
			$page->lng_id	=	$myPage->lng_id;
			$page->render($page->ver_id);
			$content		=	$page->blockHTML;
			if($this->getI('headlines') == 1) {
				$replace	=	array(	'/<h[0-6]{1}>.*?<\/h[0-6]{1}>/si'	);
				$content	=	preg_replace('/<h[0-6]{1}>.*?<\/h[0-6]{1}>/si','',$content,1);
			}
			$pages[]		=	array(	'id'		=>	$p,
										'content'	=>	$content);
		}
		
		$mySmarty->assign("open",$this->getI('open'));
		$mySmarty->assign('lng_id',$myPage->lng_id);
		$mySmarty->assign('accordion',$this->getI('accordion'));
		$mySmarty->assign('id',	substr(md5(mt_rand(0,1000)),0,5));
    	$mySmarty->assign("pages",$pages);
    	$html = $mySmarty->fetch($TPL_1);
		
    	return $html;
    }
  }
  
}