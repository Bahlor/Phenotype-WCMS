<?php /* Smarty version 2.6.25, created on 2012-09-21 11:27:43
         compiled from include_defaultcode.tpl */ ?>
<?php echo '<?php
/**
 * Name of your include
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeInclude_'; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ' extends PhenotypeInclude
{
  
  public $id = '; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ';

  public function display()
  {
    global $myDB, $myPage, $myRequest;
	
	// Initialize template access (=>$mySmarty) 
	// eval ($this->initRendering());	
  }

}
?>'; ?>