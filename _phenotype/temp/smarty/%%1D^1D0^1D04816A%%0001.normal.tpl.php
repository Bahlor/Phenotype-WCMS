<?php /* Smarty version 2.6.25, created on 2012-06-15 05:45:37
         compiled from /var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 4, false),array('function', 'description_of_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 6, false),array('function', 'url_for_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 25, false),array('function', 'title_of_page', '/var/www/vhosts/think-dev.de/dalatedensee/dynamisch/_phenotype/application/templates/page_templates/0001.normal.tpl', 25, false),)), $this); ?>
<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smarty_modifier_escape($_tmp)); ?>
 - DalatEdensee</title>
	<meta charset="utf-8" />
	<meta name="description" content ="<?php echo $this->_plugins['function']['description_of_page'][0][0]->description_of_page(array('pag_id' => $this->_tpl_vars['page']->id), $this);?>
"/>
	<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" /> 
	<link rel="icon" href="/dynamisch/htdocs/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="/dynamisch/htdocs/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/dynamisch/htdocs/css/main.css" />
	<link rel="stylesheet" href="/dynamisch/htdocs/css/_print/main.css" media="print" />
	<link rel="stylesheet" type="text/css" href="/dynamisch/htdocs/css/themes/default.css" />
	<link rel="stylesheet" href="/dynamisch/htdocs/css/style.css" />	
	<!--[if IE]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie-all.css" media="all" /><![endif]--> 
	<!--[if IE 7]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie7.css" media="all" /><![endif]--> 
	<!--[if lt IE 7]><link rel="stylesheet" href="/dynamisch/htdocs/css/_patches/win-ie-old.css" media="all" /><![endif]--> 
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]--> 
	<!--[if IE ]><link rel="stylesheet" href="/dynamisch/htdocs/css/ie.css" media="all"/><![endif]--> 
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css' />
</head>
<body>
	<header class="wrapper">
		<div class="container">
			<div class="grid_4">
				<a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => 1), $this);?>
" title="<?php echo $this->_plugins['function']['title_of_page'][0][0]->title_of_page(array('pag_id' => 1), $this);?>
"><img src="/dynamisch/htdocs/images/site/logo.png" width="272" height="98" alt="Dalat Eden See Resort Logo" /></a>
			</div>
			<div class="grid_8" id="navigation">
				<nav>
					<?php echo $this->_tpl_vars['pt_include1']; ?>

				</nav>
				<div id="language">
					<a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id,'lng_id' => 1), $this);?>
" title="<?php echo $this->_config[0]['vars']['english']; ?>
"><img src="/dynamisch/htdocs/images/site/flags/en.png" width="16" height="11" alt="<?php echo $this->_config[0]['vars']['english']; ?>
" /></a>
					<a href="<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id,'lng_id' => 2), $this);?>
" title="<?php echo $this->_config[0]['vars']['vietnamese']; ?>
"><img src="/dynamisch/htdocs/images/site/flags/vi.png" width="16" height="11" alt="<?php echo $this->_config[0]['vars']['vietnamese']; ?>
" /></a>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</header>
	<div id="slider">
		<div class="container">
			 
			<ul class="wrapper grid_12 nivoSlider">
				<?php echo $this->_tpl_vars['pt_include2']; ?>

			</ul>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<section id="content" class="container">
		<div class="grid_12" id="breadcrumb">
			<?php echo $this->_tpl_vars['pt_include3']; ?>

		</div>
		<div class="grid_8 no-padding">
			<?php echo $this->_tpl_vars['pt_block1']; ?>

		</div>
		<div class="grid_3 no-padding push_1 sidebar">
			<div class="grid_3 teaser">
				<h2>Book online</h2>
				<img src="/dynamisch/htdocs/images/content/book_online.jpg" width="210" height="140" alt="Book online!" />
				<p>Check availability and book now. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<a href="http://reservations.directwithhotels.com/reservation/selectDates/13091" class="external button right bottom">read more</a>
			</div>
			<div class="grid_3 teaser">
				<h2>Events</h2>
				<img src="/dynamisch/htdocs/images/content/event.jpg" width="210" height="140" alt="Book online!" />
				<p>This is the latest event of november. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
				<a href="#" class="button right bottom">read more</a>
			</div>
			<div class="grid_3 teaser">
				<h2>Special Offers</h2>
				<img src="/dynamisch/htdocs/images/content/offer.jpg" width="210" height="140" alt="Book online!" />
				<p>Christmas 2011 and New Year 2012 are approaching. We all may be looking for a special gift for ourselves, for family, relatives, friends, and especially for the children.</p>
				<a href="#" class="button right bottom">read more</a>
			</div>
			<div class="grid_3 teaser">
				<h2>Dalat discovery</h2>
				<img src="/dynamisch/htdocs/images/content/discovery.jpg" width="210" height="140" alt="Book online!" />
				<p>Christmas 2011 and New Year 2012 are approaching. We all may be looking for a special gift for ourselves, for family, relatives, friends, and especially for the children.</p>
				<a href="#" class="button right bottom">read more</a>
			</div>
		</div>
		<div class="clear"></div>
		<div class="grid_12">
			<hr />
		</div>
	</section>
	<footer>
		<div id="top_footer">
			<div class="container">
				<div class="grid_5">
					<h3>Quick Navigation</h3>
					<?php echo $this->_tpl_vars['pt_include4']; ?>

				</div>
				<div class="grid_4">
					<h3>Contact Us</h3>
					<p>Dalat Edensee - lake resort and spa<br />
					Tuyen Lam Lake - Zone VII.2<br />
					Dalat - Lam Dong - Vietname <br />
					T: +84 63 383 1515<br />
					F: +84 63 352 4499<br />
					Email: info@dalatedensee.com</p>
				</div>
				<div class="grid_3">
					&nbsp;
				</div>
			</div>
		</div>
		<div id="bottom_footer">
			<div class="container">
				<div class="grid_5">
					<p>Copyright &copy; 2012 think! advertising GmbH. All rights reserved.</p>
				</div>
				<div class="grid_4">
					<p>Facebook Like still disabled</p>
				</div>
				<div class="grid_3" id="socials">
					<p><a href="http://www.facebook.com/pages/Dalat-Eden-Resort-Spa/221052624590225" class="external social facebook">Facebook</a>
					<a href="https://twitter.com/share?url=<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id,'lng_id' => $this->_tpl_vars['page']->lng_id), $this);?>
" class="external social twitter">Twitter</a>
					<a href="http://www.youtube.com/dalatedensee" class="external social youtube">YouTube</a>
					<a href="http://del.icio.us/post?url=http://dalat.think-dev.de<?php echo $this->_plugins['function']['url_for_page'][0][0]->url_for_page(array('pag_id' => $this->_tpl_vars['page']->id,'lng_id' => $this->_tpl_vars['page']->lng_id), $this);?>
&title=<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smarty_modifier_escape($_tmp)); ?>
" class="external social delicious">Delicious</a></p>
				</div>
			</div>
		</div>
	</footer>
	<!--scripts-->
	<script type="text/javascript" data-main="/dynamisch/htdocs/js/main.js" src="/dynamisch/htdocs/js/require.js"></script>
</body>
</html>