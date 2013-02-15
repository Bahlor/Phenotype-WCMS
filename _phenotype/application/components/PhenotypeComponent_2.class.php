<?php
/**
 * H2
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_2 extends PhenotypeComponent
{
  public $com_id = 2;

  public $name = "H2"; // is shown as label in the editing area

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