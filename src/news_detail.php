<?php 
	session_start();
	include "admin/libraries/config/config.php";
	include "function/function.php";
	$newsID=$_REQUEST['newsID'];
	$newDetail=getNews_First3($newsID);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$newDetail[2];?> : โรงเรียนเมธาพัฒน์ - Metapaht primary school</title>

<meta name="Keywords" content="Metapaht, เมธาพัฒน์, โรงเรียนเมธาพัฒน์, เมธาพัฒน์นครราชสีมา">
<meta name="Description" content="<?=$newDetail[3];?>">
 <link rel="icon" href="assets/images/logo_metapaht.png" type="image/x-icon">


<meta property="og:title" content="<?=$newDetail[2];?> : โรงเรียนเมธาพัฒน์ - Metapaht primary school">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?=$newDetail[2];?> : โรงเรียนเมธาพัฒน์ - Metapaht primary school">
<meta property="og:description" content="<?=$newDetail[3];?>">
<meta property="og:url" content="http://metapaht.com/news_detail.php?newsID=<?=$newsID;?>">
<meta property="og:image" content="http://metapaht.com/<?=	$newDetail[7];?>" />
<link rel="image_src" href="http://metapaht.com/<?=	$newDetail[7];?>" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:type" content="image/gif" />
<meta property="og:image:type" content="image/png" />
  
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
<link rel="stylesheet" href="assets/css/news_style.css" />
<!-- ADD CSS RAGRAPH-->
<style>

.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>

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

    <body>
        
    <div id="header" style="z-index: 600;">
       <?php  include './menunews.php';?>
    </div>
<div style="padding-top:0px;">
            <div style="background-image:url(assets/images/title_news.jpg); margin-top:50px;" align="center"  class="classTitlePage"></div>
</div>
<div id="productShow" class="row" style="width:100%; z-index:300; margin-left:0px;   background-color:#f9f9fb; padding-top:30px; padding-bottom:30px; overflow:hidden;">
<div class="container fontKanit" style="text-align:left; padding-top:0px; padding-bottom:0px; font-size:18px; font-weight:600;">
	<div class="col-xs-12 col-sm-12 col-md-12" style="text-decoration:none;">
    	<a href="index.php" style="color:#000; text-decoration:none;">HOME</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="news.php" style="color:#000; text-decoration:none;">NEWS & EVENT</a>
    </div>
</div>
</div>
<div  style="clear:both;"></div>

        
<div class="container">
        <div class="row" align="center">
        		<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:10px; padding-bottom:10px; font-size:10px; font-weight:500;">
                
                <div class="col-xs-12 col-sm-12 col-md-12" style="color:#333; font-size:35px; padding-top:20px;" align="center">
	<div  class="imgsssSize" style="overflow:hidden;">
   	  <img src="<?=$newDetail[7];?>" width="100%"  class="img-responsive"></div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12" style="color:#333; font-size:35px; padding-top:20px;">
	<?=$newDetail[2];?>
</div>
<div class="col-xs-12 col-sm-4 col-md-4" style="color:#333; font-size:35px; padding-top:0px;"></div>
<div class="col-xs-12 col-sm-4 col-md-4" style="color:#333; font-size:35px; padding-top:10px;"><hr></div>
<div class="col-xs-12 col-sm-4 col-md-4" style="color:#333; font-size:35px; padding-top:0px;"></div>
<div class="col-xs-12 col-sm-12 col-md-12" style="color:#AAA; font-size:14px; padding-top:00px;">ADD BY : Metapaht School . DATE : <?=$newDetail[4]." ".$newDetail[5]." ".$newDetail[6];?> </div>


</div>

</div>

<div class="row" style="width:100%; z-index:300; margin-left:0px; background-color:#FFFFFFF;  padding-top:0px; padding-bottom:60px; overflow:hidden; padding-left:0px; padding-right:0px;">
<div class="container fontKanit" style="text-align:center; padding-top:50px; padding-bottom:0px; text-align:center; font-size:18px; width:100%; padding-left:0px; padding-right:0px;">
	  <div class="col-xs-12 col-sm-12 col-md-12" align="center" style="padding-bottom:150px;">
      <?=$newDetail[9];?>
      </div>
</div>
</div>
                
                </div>
        </div>     
</div>  

        
<div style="height:0px;"></div>
   <!-- start footer-->
<?php include "footer.php";?>             
<!-- End footer--> 


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