var base		=	'/dynamisch/htdocs/',
	baseURL		=	base+'js/',
	baseURLCSS	=	base+'css/';

require(['jquery','require'],function($,require) {
	
	addCSS	=	function(name) {
		if(name && name !== undefined) {
			if (document.createStyleSheet) {
			    document.createStyleSheet(baseURLCSS+name);
			} else {
			    $('<link rel="stylesheet" type="text/css" href="' + baseURLCSS+name + '" />').appendTo('head'); 
			}
		}
	};
	
	$(document).ready(function() {
		var current = $('nav ul li.active');
	
		require([baseURL+'sequence.jquery-min.js'],function() {
			//addCSS('sequencejs-theme.apple-style.css');
			var options = {		
				autoPlayDelay: 4000,
				hidePreloaderDelay: 500,
				hidePreloaderusingCSS: false,						
				transitionThreshold: 500,
				pauseOnHover: true,
				animateStartingFrameIn:true,
				preloader:false,
				fallback:	{
					theme:	'fade'
				}
			};
			 var seq	=	$("#slidewrap").sequence(options).data('sequence');
		});
		
		
		$('a.external').live('click',function(ev) {
			window.open($(this).attr('href'),$(this).attr('title'));
			ev.preventDefault();
		});
		
		if($('.lightbox').length > 0) {	
			addCSS('fancybox.css');
			require([baseURL+'jquery.easing.js',baseURL+'jquery.mousewheel.js',baseURL+'jquery.fancybox.js'], function() {
				$('.lightbox').fancybox({	'titlePosition':'over',  
											'transitionIn':'elastic',
											'transitionOut':'elastic',
											'easingIn':'easeOutBack',
											'easingOut': 'easeInBack',
											'opacity':true
										});
			});
		}
		
		$('nav ul li').hover(function() {
			$(this).children('a').stop().animate({'bottom':'20px'},400);
		},
		function() {
			$(this).children('a').stop().animate({'bottom':'0px'},400);
		});
		
	});
});