<?php 
session_start();
include "admin/libraries/config/config.php";
include "function/function.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>โรงเรียนเมธาพัฒน์ - Metapaht primary school</title>

<meta name="Keywords" content="Metapaht, เมธาพัฒน์, โรงเรียนเมธาพัฒน์, เมธาพัฒน์นครราชสีมา">
<meta name="Description" content="เราตั้งใจสร้างโรงเรียนที่เป็นนวัตกรรมใหม่ ให้ชาวโคราชได้สัมผัส ในราคาที่คุ้มค่าโดยนำจุดเด่นของโรงเรียนนานาชาติผนวกเข้ากับหลักสูตรของไทย">
 <link rel="icon" href="assets/images/logo_metapaht.png" type="image/x-icon">


    <meta property="og:title" content="โรงเรียนเมธาพัฒน์ - Metapaht primary school">
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="โรงเรียนเมธาพัฒน์ - Metapaht primary school">
    <meta property="og:url" content="http://www.metapaht.com/">
    <meta property="og:image" content="http://metapaht.com/facebook_img.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <link rel="image_src" href="http://metapaht.com/facebook_img.jpg" />
    <meta property="og:description" content="เราตั้งใจสร้างโรงเรียนที่เป็นนวัตกรรมใหม่ ให้ชาวโคราชได้สัมผัส ในราคาที่คุ้มค่าโดยนำจุดเด่นของโรงเรียนนานาชาติผนวกเข้ากับหลักสูตรของไทยดังนั้นเด็กเมธาพัฒน์จึงพร้อมสำหรับการต่อยอดทั้งในระบบการศึกษาไทยหรือต่างประเทศได้">
  
    <!-- <meta property="fb:admins" content="" /> -->

<!-- ADD CSS -->
<link rel="stylesheet" href="assets/css/animate.css" />
<link rel="stylesheet" href="assets/css/swipper.min.css"/>
<link rel="stylesheet" href="assets/css/AddCss.css"/>
<link rel="stylesheet" href="assets/css/media_query.css"/>
<link rel="stylesheet" href="assets/css/media_res.css"/>
<link rel="stylesheet" href="assets/css/layerslider.css" type="text/css" />
<link rel="stylesheet" href="fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css"/>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/footercall.css" />
<!-- ADD CSS -->

<!-- ADD CSS RAGRAPH-->
<link rel="stylesheet" href="assets/css/paragraph_one.css" />
<link rel="stylesheet" href="assets/css/paragraph_two.css" />
<link rel="stylesheet" href="assets/css/paragraph_three.css" />
<link rel="stylesheet" href="assets/css/paragraph_four.css" />
<link rel="stylesheet" href="assets/css/paragraph5.css" />

<style>

.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
</style>
<!-- ADD CSS RAGRAPH-->

  <script src="assets/js/jquery-1.12.4.js" charset="utf-8"></script>
  <script src="assets/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="assets/js/greensock.js" type="text/javascript"></script>
  <script src="assets/js/TweenMax.min.js" type="text/javascript"></script>
  <script src="assets/js/layerslider.kreaturamedia.js" type="text/javascript"></script>
  <script src="assets/js/layerslider.transitions.js" type="text/javascript"></script>
  <script type="text/javascript" src="fancyBox/source/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="fancyBox/source/helpers/jquery.fancybox-buttons.js"></script>
  
  <script type="text/javascript">
		jQuery(function($) {
		  $('a[target=ls-scroll]').each(function() {
			var href = this.getAttribute('href'), root = '/';
			if (href.indexOf(root) === 0) this.setAttribute('href', href.substr(root.length));
		  });
		});
		var LS_Meta = {"v":"6.5.6"};
  </script>
  <script data-cfasync="false" type="text/javascript">var lsjQuery = jQuery;</script>
  <script data-cfasync="false" type="text/javascript">
			lsjQuery(document).ready(function() {
					if(typeof lsjQuery.fn.layerSlider === "undefined") {
						if( window._layerSlider && window._layerSlider.showNotice) { 
								window._layerSlider.showNotice('layerslider_13','jquery');
						}
					} else {
						lsjQuery("#layerslider_13").layerSlider({sliderVersion: '6.1.0', type: 'fullwidth', responsiveUnder: 1280, maxRatio: 1, parallaxCenterLayers: 'top', parallaxScrollReverse: true, hideUnder: 0, hideOver: 100000, skin: 'v5', thumbnailNavigation: 'enable', skinsPath: 'assets/css/'});
					}
			});
</script>
    
</head>

    <body class="popup" >
   <!-- MENU PART -->
   <div id="header" style="z-index: 600;">
       <?php include 'menu.php';?>
    </div>
<!-- MENU PART -->

<div id="wrapper">
	<?php include "slide.php";?>
</div>   
    
       <!--<div style="height: 600px;"></div> -->
<!-- ABOUT PART -->
<?php $paragarph1=getdata_editer(1); include "paragraph_one.php"; ?>
<!-- END ABOUT PART -->

<!-- แนวคิด PART -->
<?php $paragarph2=getdata_editer(2); include "paragraph_two.php";?>
<!-- END PART -->

<!-- วิสัยทัศ PART -->
<?php $paragarph3=getdata_editer(3); include "paragraph_three.php";?>
<!-- END  PART -->

<!--  หลักสูตร PART -->
<?php $paragarph5=getdata_editer(5); include "paragraph_four.php";?>
<!--  Fac PART -->

<?php $paragarph7=getdata_editer(7); include "paragraph_five.php";?>


<!-- start footer-->
<?php include "footer.php";?>             
<!-- End footer-->  

            
<div class="loading-page is-active"><img src="assets/images/logo/load.png" alt="Metapath Load" /></div>
    
<script src="assets/js/jquery.validate.min.js" charset="utf-8"></script>
<script src="assets/js/swiper.jquery.min.js" charset="utf-8"></script>
<script src="assets/js/scrollreveal.js" charset="utf-8"></script>
<script src="assets/js/TweenMax.min.js" charset="utf-8"></script>
<script src="assets/js/ScrollToPlugin.min.js" charset="utf-8"></script>
<script src="assets/js/script.js" charset="utf-8"></script>
<script>
$(document).ready(function() {
	$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',
				autoCenter : 'true',
				helpers : {
					title : {
						type : 'over'
					}
				}
			});

$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: true,
		width		: '70%',
		height		: '50%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		centerOnScroll: true,
  		autoCenter	: true,
		autoResize	: true
	});
	
	
}); </script>
</body>
</html>