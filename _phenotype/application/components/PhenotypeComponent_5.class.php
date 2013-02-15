<?php
/**
 * IMG
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_5 extends PhenotypeComponent
{
  public $com_id = 5;

  public $name = "Bild"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
    $this->form_image_selector("","image1","",true,0,0,0,array("altandalign"=>true));
    $this->form_link('Link','link');
  }

  public function render($context)
  {
	// Example:
		
	// Initialize template access (=>$mySmarty)  
    eval ($this->initRendering());

	switch ($this->get("image1_align"))
		{
			case "left":
				$style = "float:left";
				break;

			case "right":
				$style = "float:right";
				break;

			case "center":
				$style = "";
				break;
		}


		if ($this->getI("image1_img_id")!=0)
		{
			$myImg = new PhenotypeImage($this->get("image1_img_id"));
			$myImg->style = $style;
			$mySmarty->assign("img",$myImg->render($this->get("image1_alt")));
		}
		if($this->get('link_url') != '') {
			$mySmarty->assign('link',$this->get('link_url'));
		}

    $html = $mySmarty->fetch($TPL_1);

    return $html;
  }
  
}