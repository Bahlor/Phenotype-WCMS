<?php
// -------------------------------------------------------
// Phenotype Content Application Framework
// -------------------------------------------------------
// Copyright (c) 2003-2010 Nils Hagemann, Paul Sellinger,
// Peter Sellinger, Michael Kr�mer.
//
// Open Source since 11/2006, I8ln since 11/2008
// -------------------------------------------------------
// Thanks for your support: 
// Markus Griesbach, Alexander Wehrum, Sebastian Heise,
// Dominique Boes, Florian Gehringer, Jens Bissinger
// -------------------------------------------------------
// www.phenotype-cms.com - offical homepage
// www.sellinger-design.de - inventors of phenotype
// -------------------------------------------------------
// Version 3.0 vom 31.01.2010
// -------------------------------------------------------
?>
<?php
require("_config.inc.php");
$myPT->loadTMX("Phenotype");

?>
<?php
$sql = "SELECT * FROM action WHERE act_status = 1 ORDER BY act_nextrun";
if (isset($_REQUEST["act_id"]))
{
	$act_id = (int)$_REQUEST["act_id"];
} else if (isset($argv[1])) {
	if (mb_substr($argv[1],0,7) == 'act_id=') {
		$act_id = mb_substr($argv[1], 7);
	}
}

if (isset($act_id)) {
	$sql = "SELECT * FROM action WHERE act_status = 1 AND act_id=".$act_id." ORDER BY act_nextrun";
}

$rs = $myDB->query($sql);
while ($row=mysql_fetch_array($rs))
{
  $fname = "PhenotypeAction_".$row["act_id"];
  $myAction = new $fname();
  $myAction->runAction();
}
?>
