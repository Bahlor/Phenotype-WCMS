<?php /* Smarty version 2.6.25, created on 2012-09-21 11:25:32
         compiled from contentobject_defaultcode.tpl */ ?>
<?php echo '<?php
/**
 * Name of your content object class
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeContent_'; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ' extends PhenotypeContent
{
  public $content_type = '; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ';
  
  protected $dat_id_min = '; ?>
<?php echo $this->_tpl_vars['dat_id_min']; ?>
<?php echo ';
  protected $dat_id_max = '; ?>
<?php echo $this->_tpl_vars['dat_id_max']; ?>
<?php echo ';
  
  // Remove comment slashes for multiple tabs
  // public $_blocks = Array("Config","Items");
  // public $_icons = Array("b_konfig.gif","b_items.gif");
  
  public function setDefaultProperties()
  {
	  $this->set("bez","New Record");	
  }
  
  public function init($row,$block_nr=0) 
  { 
    parent::init($row,$block_nr); 
	
    // Customize your form with form_xyz methods
    
    $this->form_textfield("Name","bez",200);
        
	// If you have multiple tabs ... 
		
	/*switch ($block_nr)
	{ 
	  case 0:
	  break;
	}*/
  }
  
  public function attachKeyFields()
  {
  	// define keys here
    // $this->setKey1($this->get("propertyxy"));
  }
  

}
?>'; ?>