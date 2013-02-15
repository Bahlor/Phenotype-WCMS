<?php
/**
 * Breadcrumb
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeInclude_3 extends PhenotypeInclude
{
  
  public $id = 3;

  public function display()
  {
    global $myDB, $myPage, $myRequest;
	
	$nav	=	new PhenotypeNavigationHelper();
	$tree	=	$nav->getPagesWithinPath($myPage->id);
	
	// Initialize template access (=>$mySmarty) 
	eval ($this->initRendering());	
	$mySmarty->assign('tree',$tree);
	$mySmarty->assign('lng_id',$myPage->lng_id);
	$mySmarty->display($TPL_1);
  }

}
?>