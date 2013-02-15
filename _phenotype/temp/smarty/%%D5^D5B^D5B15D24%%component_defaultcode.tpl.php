<?php /* Smarty version 2.6.25, created on 2012-09-21 11:24:35
         compiled from component_defaultcode.tpl */ ?>
<?php echo '<?php
/**
 * Name of your component
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_'; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ' extends PhenotypeComponent
{
  public $com_id = '; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ';

  public $name = "New component"; // is shown as label in the editing area

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
  
}'; ?>