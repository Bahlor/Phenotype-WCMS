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
	
		require([baseURL+'jquery.slider.js'],function() {
			$('#slider ul,#slider_container ul').nivoSlider({'effect':'fade',animSpeed:1200,pauseTime:4000});
			var left	=	1000/2;
			left		=	left-($('.nivo-controlNav').outerWidth()/2)
			$('.nivo-controlNav').css('left',left+'px');
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
		
		if($('.slide_btn').length > 0) {
			$('.slide_btn').live('click',function(ev) {
				if($(this).data('link') != '' && $(this).data('link') !== undefined) {
					if(!$(this).hasClass('active')) {
						$('.slide_btn[data-link='+$(this).data('link')+']').removeClass('active');
						$('.slide_content[data-link='+$(this).data('link')+']:visible').slideUp('fast');
					
						$(this).toggleClass('active');
						$(this).parent('div').next('.slide_content').slideToggle('fast');
					}
				} else {
					$(this).toggleClass('active');
					$(this).parent('div').next('.slide_content').slideToggle('fast');
				}
				ev.preventDefault();
			});
		};
		
		$('nav ul li').hover(function() {
			$(this).children('a').stop().animate({'bottom':'20px'},400);
		},
		function() {
			$(this).children('a').stop().animate({'bottom':'0px'},400);
		});
		
	});
});