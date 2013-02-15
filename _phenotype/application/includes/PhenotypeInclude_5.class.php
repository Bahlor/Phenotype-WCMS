<?php
/**
 * Meta Daten
 *
 * @package phenotype
 * @subpackage application
 */
class PhenotypeInclude_5 extends PhenotypeInclude
{
  
  public $id = 5;

  public function display()
  {
    global $myDB, $myPage, $myRequest;
	
	// Initialize template access (=>$mySmarty) 
	eval ($this->initRendering());	

	$keywords	=	$myPage->row['pag_searchtext'];
	$description=	$myPage->row['pag_comment'];

	if(trim($keywords) == '' || empty($keywords)) 	{ $keywords 	= '';	}
	if($description == title_of_page($myPage->id)) 	{ $description 	= ''; 	}
	
	$mySmarty->assign('keywords',		strip_tags(str_replace(array('\r\n', '\n', '\r'),' ',$keywords)));
	$mySmarty->assign('description',	strip_tags(str_replace(array('\r\n', '\n', '\r'),' ',$description)));
	$mySmarty->display($TPL_1);
  }

}
?>