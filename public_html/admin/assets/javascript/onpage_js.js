<!-- SCRIPT TOTOP-->
			$(document).ready(function(){
			
				// hide #back-top first
				
				$("#back-top").hide();
				
				// fade in #back-top
				$(function () {
					$(window).scroll(function () {
						if ($(this).scrollTop() > 500) {
							$('#back-top').fadeIn();
							 document.getElementById('TOPKDMENU').style.opacity="0.9";
						} else {
							$('#back-top').fadeOut();
							document.getElementById('TOPKDMENU').style.opacity="1.0";
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
<!-- END SCRIPT TOTOP-->