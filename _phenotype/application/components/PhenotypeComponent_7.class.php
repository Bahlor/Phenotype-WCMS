<?php
/**
 * HR
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_7 extends PhenotypeComponent
{
  public $com_id = 7;

  public $name = "HR"; // is shown as label in the editing area

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