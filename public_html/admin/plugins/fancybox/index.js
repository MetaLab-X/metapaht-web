$(document).ready(function() {


			$('.fancybox').fancybox({					
			closeClick  : false,
			autoDimensions:true,
			width		: '90%',
			height		: '200%',
			helpers   : { overlay : {closeClick: false}},
			afterClose : function() {location.reload(); return;}
		});

$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});


					$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

		
		$("#various").fancybox({
		maxWidth	: 1000,
		maxHeight	: 700,
		fitToView	: false,
		width		: '90%',
		height		: '200%',
		autoSize	: false,
		closeClick	: false,
		openEffect : 'elastic',
		closeEffect	: 'elastic'
	});
		
		
		/*for(var ss=1;ss<=1000;ss++){
			$("#various5"+ss).fancybox({
				maxWidth	: 1000,
		maxHeight	: 700,
		fitToView	: false,
		width		: '90%',
		height		: '200%',
		autoSize	: false,
		closeClick	: false,
		openEffect : 'elastic',
		closeEffect	: 'elastic'
			});
			}*/
			
		$("#zone_show").fancybox({
				maxWidth	: 1000,
				maxHeight	: 600,
				fitToView	: false,
				width		: '90%',
				height		: '200%',
				autoSize	: false,
				closeClick	: false,
				openEffect : 'elastic',
				closeEffect	: 'elastic'
		});


			$("#various5s").fancybox({
				maxWidth	: 1000,
		maxHeight	: 600,
		fitToView	: false,
		width		: '90%',
		height		: '200%',
		autoSize	: false,
		closeClick	: false,
		openEffect : 'elastic',
		closeEffect	: 'elastic'
			});
			
					$("#various5ss").fancybox({
		fitToView	: false,
		width		: '90%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect : 'elastic',
		closeEffect	: 'elastic'
			});
					
			$("#various5new").fancybox({
		fitToView	: false,
		width		: '90%',
		height		: '100%',
		autoSize	: false,
		closeClick	: false,
		openEffect : 'elastic',
		closeEffect	: 'elastic'
			});
		
		


		
		$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 300) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
		
		});