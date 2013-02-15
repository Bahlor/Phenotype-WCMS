<?php
/**
 * H3
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_3 extends PhenotypeComponent
{
  public $com_id = 3;

  public $name = "H3"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
    $this->form_textfield("Text","headline",300);
  }

  public function render($context)
  {
	// Example:
		
	// Initialize template access (=>$mySmarty)  
    eval ($this->initRendering());

    $mySmarty->assign("headline",$this->getH("headline"));
    $html = $mySmarty->fetch($TPL_1);

    return $html;
  }
  
}