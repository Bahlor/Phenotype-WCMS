<!DOCTYPE html>
<html lang="de">
<head>
	<title>{$title|escape} - Phenotype CMS Website</title>
	<meta charset="utf-8" />
	<link rel="canonical" href="{pt_constant value="SERVERFULLURL"}{url_for_page pag_id=$page->id}" />
	{$pt_include5}
	<!--<meta name = "viewport" content = "width = device-width;" /> -->
	<!-- define the width of the page as no wider than the width of the viewport --> 
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/css/main.css" />
	<link rel="stylesheet" href="/css/_print/main.css" media="print" />
	<link rel="stylesheet" type="text/css" href="/css/themes/default.css" />
	<!--[if IE]><link rel="stylesheet" href="/css/_patches/win-ie-all.css" media="all" /><![endif]--> 
	<!--[if IE 7]><link rel="stylesheet" href="/css/_patches/win-ie7.css" media="all" /><![endif]--> 
	<!--[if lt IE 7]><link rel="stylesheet" href="/css/_patches/win-ie-old.css" media="all" /><![endif]--> 
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
	<!--[if IE ]><link rel="stylesheet" href="css/ie.css" media="all"/><![endif]--> 
	<link href='http://fonts.googleapis.com/css?family=Enriqueta:400,700|Open+Sans:400italic,800italic,600italic,400,600,800' rel='stylesheet' type='text/css' />
</head>
<body>
	{*WEBSITE CONTENT HERE*}
	<!--scripts-->
	<script type="text/javascript" data-main="/js/main.js" src="/js/require.js"></script>
</body>
</html>