<?php
/**
 * Slide (open)
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_10 extends PhenotypeComponent
{
  public $com_id = 10;

  public $name = "Slide (open)"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
    $this->form_textfield("Headline","headline",300);
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