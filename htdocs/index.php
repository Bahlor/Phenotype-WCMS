<?php
if(!ob_start("ob_gzhandler")) ob_start();
if (file_exists("install.php"))
{
	require("install.php");
	exit();	
}
define ("PT_FRONTEND",1);
require("../_config.inc.php");
$myPT->executeFrontend();
