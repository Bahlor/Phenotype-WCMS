<?php 
/**
 * Richtext
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_1001 extends PhenotypeComponent
{
	public $com_id = 1001;
	public $name = "Richtext";
	

	public function setDefaultProperties()
	{
		$this->set("_revision",1);
	}

	
	public function initForm($context)
  	{
  		// Customize input form with form_xy-methods 
  		
  		$this->form_richtext("","text",405,15);
  		$this->form_selectbox("Grid","grid",array(0=>'8',1=>'12'));
  	}

	public function render($context)
	{

		// Initialize template access (=>$mySmarty) 
		eval ($this->initRendering());

		$template = $TPL_DEFAULT;

		$grid=8;
		switch($this->getI('grid')) {
			case 0:	$grid=8;
					break;
			case 1:	$grid=12;
					break;
			default:$grid=8;
					break;
		}

		$mySmarty->assign("text",$this->get("text"));
		$mySmarty->assign("grid",$grid);

		return $mySmarty->fetch($template);
	}
	
	public function setFullSearch()
	{
		$s = $this->get("headline") . "|" . $this->get("text");
		return ($s);
	}
	
	public function getEditLabel()
	{
		return ($this->name." (#".$this->id.")");
	}

}