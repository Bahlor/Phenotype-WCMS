<?php
// -------------------------------------------------------
// Phenotype Content Application Framework
// -------------------------------------------------------
// Copyright (c) 2003-2010 Nils Hagemann, Paul Sellinger,
// Peter Sellinger, Michael Krämer.
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

/**
 * @package phenotype
 * @subpackage system
 *
 */
class PhenotypeMediaManager
{
	public function createMediagroup($name)
	{
		global $myDB;
		
		$mySQL = new SQLBuilder ( );
		$mySQL->addField ( "grp_bez", $name );
		$mySQL->addField("grp_type",2,DB_NUMBER);
		$sql = $mySQL->insert ( "mediagroup" );
		$myDB->query ( $sql );
		
		$med_id = mysql_insert_id ();
		return ($med_id);
	}
}

?>