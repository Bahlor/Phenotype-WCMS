<?php /* Smarty version 2.6.25, created on 2012-09-24 15:12:14
         compiled from /var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 4, false),array('function', 'url_for_page', '/var/www/vhosts/think-dev.de/fashionsession/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 6, false),)), $this); ?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smarty_modifier_escape($_tmp)); ?>
 - Fashion Session</title>
	<meta charset="utf-8" />
	<link rel="canonical" href="http://www.fashion-session.de<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id), $this);?>
" />
	<?php echo $this->_tpl_vars['pt_include5']; ?>

	<!--<meta name = "viewport" content = "width = device-width;" /> -->
	<!-- define the width of the page as no wider than the width of the viewport --> 
	<link rel="icon" href="/dynamisch/htdocs/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/dynamisch/htdocs/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/dynamisch/htdocs/css/main.css" />
	<link rel="stylesheet" href="/dynamisch/htdocs/css/_print/main.css" media="print" />
	<link rel="stylesheet" type="text/css" href="/dynamisch/htdocs/css/themes/default.css" />
	<!--[if IE]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie-all.css" media="all" /><![endif]--> 
	<!--[if IE 7]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie7.css" media="all" /><![endif]--> 
	<!--[if lt IE 7]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie-old.css" media="all" /><![endif]--> 
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
	<!--[if IE ]><link rel="stylesheet" href="css/ie.css" media="all"/><![endif]--> 
	<link href='http://fonts.googleapis.com/css?family=Enriqueta:400,700|Open+Sans:400italic,800italic,600italic,400,600,800' rel='stylesheet' type='text/css' />
</head>
<body>
	<header>
		<div class="wrapper">
			<a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => 1), $this);?>
" id="logo" title="Back to home"><img src="/dynamisch/htdocs/images/site/logo.png" width="266" height="89" alt="Fashion Session Logo" /></a>
			<nav>
				<ul>
					<?php echo $this->_tpl_vars['pt_include1']; ?>

				</ul>
			</nav>
		</div>
	</header>
	<section id="slider">
		<div class="wrapper" id="slidewrap">
			<ul>
				<li>
					<img src="http://fashionsession.think-dev.de/images/slider/1_0.png" width="319" height="401" alt="" class="woman animate-in" />
					<img src="http://fashionsession.think-dev.de/images/slider/1_1.png" width="424" height="166" alt="" class="text animate-in" />
				</li>
				<li>
					<img src="http://fashionsession.think-dev.de/images/slider/1_0.png" width="319" height="401" alt="" class="woman" />
					<img src="http://fashionsession.think-dev.de/images/slider/1_1.png" width="424" height="166" alt="" class="text" />
				</li>
				<li>
					<img src="http://fashionsession.think-dev.de/images/slider/1_0.png" width="319" height="401" alt="" class="woman" />
					<img src="http://fashionsession.think-dev.de/images/slider/1_1.png" width="424" height="166" alt="" class="text" />
				</li>
			</ul>
		</div>
	</section>
	<section id="content">
		<div class="wrapper container">
			<h1>Fashion Session - The real party</h1>
			<hr />
			<div id="content_wrap" class="grid_8">
				<?php if ($this->_tpl_vars['pt_block1'] == ''): ?>&nbsp;<?php else: ?><?php echo $this->_tpl_vars['pt_block1']; ?>
<?php endif; ?>
			</div>
			<aside class="push_1 grid_7">
				<div class="block">
					<h3>Headline f&uuml;r verschiedene Highlights</h3>
					<img src="images/highlights/1.jpg" width="160" height="133" alt="Headline f&uuml;r verschiedene Highlights" />
					<p>Idque offendit ius. Fugit suavitate ad eam, ut essent debitis cum. Cu duo iudico instructior. Sea te choro perfecto, per eu meis nonumy percipit. Ut mea sint constituam, cu pro impedit constituam</p>
					<div class="clearfix clear"></div>
				</div>

				<div class="block">
					<h3>Headline f&uuml;r verschiedene Highlights</h3>
					<img src="images/highlights/2.jpg" width="160" height="133" alt="Headline f&uuml;r verschiedene Highlights" />
					<p>Idque offendit ius. Fugit suavitate ad eam, ut essent. Sea te choro perfecto, per eu meis nonumy percipit. Ut mea sint.</p>
					<div class="clearfix clear"></div>
				</div>

				<div class="block">
					<h3>Headline f&uuml;r verschiedene Highlights</h3>
					<img src="images/highlights/3.jpg" width="160" height="133" alt="Headline f&uuml;r verschiedene Highlights" />
					<p>Sea te choro perfecto, per eu meis nonumy percipit. Ut mea sint constituam, cu pro impedit constituam dor sit amt, nonumy percipit.</p>
					<div class="clearfix clear"></div>
				</div>
			</aside>
		</div>
		<div class="clearfix"></div>
	</section>
	<footer>
		<div class="wrapper">
			<div class="container">
				<div class="grid_4">
					<h4>Quick Navigation</h4>
					<nav>
						<ul>
							<?php echo $this->_tpl_vars['pt_include1']; ?>

							<?php echo $this->_tpl_vars['pt_include4']; ?>

						</ul>
					</nav>
				</div>
				<div class="grid_5 push_1">
					<h4>Kontakt</h4>
					<form name="kontakt" method="post" action="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id), $this);?>
" id="contact">
						<p><input type="email" name="email" value="" placeholder="Email Adresse" /></p>
						<p><input type="text" name="subject" value="" placeholder="Betreff" /></p>
						<p><textarea name="message" placeholder="Message"></textarea></p>
						<p class="right"><input type="submit" name="send" value="Abschicken" /></p>
					</form>
				</div>
				<div class="grid_5 push_1">
					<h4>Social Media</h4>
					<p><a href="#" class="social facebook">Facebook</a> <a href="#" class="social twitter">Twitter</a> <a href="#" class="social youtube">YouTube</a> <a href="#" class="social digg">Digg</a> <a href="#" class="social rss">RSS</a></p>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</div>
			<p class="bottom">&copy; copyright 2012 by think! advertising GmbH</p>
		</div>
	</footer>
	<!--scripts-->
	<script type="text/javascript" data-main="/dynamisch/htdocs/js/main.js" src="/dynamisch/htdocs/js/require.js"></script>
</body>
</html>