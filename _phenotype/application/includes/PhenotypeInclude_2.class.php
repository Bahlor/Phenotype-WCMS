<?php
/**
 * Slider
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeInclude_2 extends PhenotypeInclude
{
  
  public $id = 2;

  public function display()
  {
    global $myDB, $myPage, $myRequest;
    
    $gal = 1000;
    if($myPage->get('slider') > 0) { $gal = (int)$myPage->get('slider'); }
	$co		=	new PhenotypeContent_1($gal);
	$images	=	$co->get('precalc');

	// Initialize template access (=>$mySmarty) 
	eval ($this->initRendering());	
	$mySmarty->assign('images',$images);
	$mySmarty->display($TPL_1);
  }

}
?>