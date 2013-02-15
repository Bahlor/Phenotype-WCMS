<?php
/**
 * Slide (close)
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_11 extends PhenotypeComponent
{
  public $com_id = 11;

  public $name = "Slide (close)"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
  }

  public function render($context)
  {
	// Example:
		
	// Initialize template access (=>$mySmarty)  
    eval ($this->initRendering());

    $html = $mySmarty->fetch($TPL_1);

    return $html;
  }
  
}