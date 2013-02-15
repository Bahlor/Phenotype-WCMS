<?php
/**
 * RSS
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeInclude_6 extends PhenotypeInclude
{
  
  public $id = 6;

  public function display()
  {
    global $myDB, $myPage, $myRequest;
	
	// Initialize template access (=>$mySmarty) 
	eval ($this->initRendering());	
	
	$last	=	time();
	$news	=	array();
	
	$months =	(604800000*4)*6;
	
	 $_artikel	=	PhenotypePeer::getRecords(3,true,'`dat_key1` DESC',array('`dat_key2` = "2001"'),20);
	 $artikel	=	array();
	 $count	=	count($_artikel);
	   foreach($_artikel	as $key => $art) {
		    $artikel[]	=	array(	'id'		=>	$art->id,
		    						'date'		=>	$art->get('date'),
		    						'headline'	=>	$art->get('bez'),
		    						'desc'		=>	strip_tags($art->get('teaser'))
		    						);
		    if($key	== 0) {
			    $last	=	$art->get('date');
		    }
	    }

	$mySmarty->assign('last', 	$last);
	$mySmarty->assign('presse',	$artikel);
	$mySmarty->display($TPL_1);
  }

}
?>