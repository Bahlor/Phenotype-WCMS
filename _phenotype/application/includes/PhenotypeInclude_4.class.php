<?php 
/** 
 * Footer navigation
 * 
 * @package phenotype 
 * @subpackage application 
 */ 
class PhenotypeInclude_4 extends PhenotypeInclude 
{ 
   
  public $id = 4; 
   
  private function getActivePath($path=array()) { 
      global $myPage; 
      $p = new PhenotypeNavigationHelper(); 
      $path = $p->getPagesWithinPath($myPage->id); 
      return $path; 
  } 
   
  private function getPages($pag_id=0,$exclude=array(),$path=array()) { 
      $p = new PhenotypeNavigationHelper(); 
      $pages = $p->getTree($pag_id,array(),1,3); 
      $npages=array(); 
      if(count($pages)) { 
          global $myPage; 
          foreach($pages as $key => $val) { 
              if(!in_array($key,$exclude)) { 
                  $active=false; 
                  $subs=array(); 
                  if($myPage->id == $key || in_array($key,$path)) { $active = true; }
                 // $subs = $this->getPages($key,$exclude,$path); 
                  $npages[] = array('id'=>$key,'active'=>$active,'subs'=>$subs);
              } 
          } 
      } 
       
      return $npages; 
  } 

  public function display() 
  { 
    global $myDB, $myPage, $myRequest; 
     
    // Build main pages 
    $pages = $this->getPages(0,array(),$this->getActivePath()); 
         
    // Initialize template access (=>$mySmarty)  
    eval ($this->initRendering());     
     
    $mySmarty->assign('pages',$pages); 
    $mySmarty->assign('lng_id',$myPage->lng_id);
    $mySmarty->display($TPL_1); 
  } 

} 
?>