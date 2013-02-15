<?php
/**
 * Galerie
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_8 extends PhenotypeComponent
{
  public $com_id = 8;

  public $name = "Galerie"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
 	$cos	=	PhenotypePeer::getRecords(1,true,'dat_bez',array(),'');
 	$data	=	array();
 	foreach($cos as $co) {
 		$data[$co->id]	=	$co->get('bez');
 	}
    $this->form_selectbox('Galerie','gal',$data);
    $this->form_selectbox('Display headline?','headline',array(	0	=>	'No',	1	=>	'Yes'));
    $this->form_selectbox('Display description?','desc', array(	0	=>	'No',	1	=>	'Yes'));
  }

  public function render($context)
  {
	// Example:
		
	// Initialize template access (=>$mySmarty)  
	if($this->getI('gal')>0) {
    	eval ($this->initRendering());
		
		$gal	=	new PhenotypeContent_1($this->getI('gal'));

		$d		=	array(	'id'	=>	$gal->id,
							'name'	=>	$gal->get('name'),
							'date'	=>	$gal->get('date'),
							'desc'	=>	$gal->get('desc'),
							'img'	=>	$gal->get('precalc')
						);
		
		$mySmarty->assign('headline',$this->getI('headline'));
		$mySmarty->assign('desc',	$this->getI('desc'));
    	$mySmarty->assign("gal",$d);
    	$html = $mySmarty->fetch($TPL_1);

    	return $html;
    }
  }	
  
}