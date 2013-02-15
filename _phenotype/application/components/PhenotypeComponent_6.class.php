<?php
/**
 * IMG
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeComponent_6 extends PhenotypeComponent
{
  public $com_id = 6;

  public $name = "2 Bilder"; // is shown as label in the editing area

  public function setDefaultProperties()
  {
	$this->set("_revision",1);
  }
  
  public function initForm($context)
  {
 	// Customize input form with form_xy-methods 
    $this->form_image_selector("","image1","",true,0,0,0,array("altandalign"=>false));
    $this->form_image_selector("","image2","",true,0,0,0,array("altandalign"=>false));
  }

  public function render($context)
  {
	// Example:
		
	// Initialize template access (=>$mySmarty)  
    eval ($this->initRendering());



		if ($this->getI("image1_img_id")!=0 && $this->getI("image2_img_id")!=0)
		{
			$myImg = new PhenotypeImage($this->get("image1_img_id"));
			$mySmarty->assign("img1",$myImg->render_fixX(310,$this->get("image1_alt")));
			$myImg = new PhenotypeImage($this->get("image2_img_id"));
			$mySmarty->assign("img2",$myImg->render_fixX(310,$this->get("image2_alt")));
		}
	
    $html = $mySmarty->fetch($TPL_1);

    return $html;
  }
  
}