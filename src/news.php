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
<link rel="stylesheet" href="assets/css/footercall.css" />

<link rel="stylesheet" href="fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css"/>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
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
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  
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
       <?php include './menunews.php';?>
    </div>
    <div style="padding-top:0px; ">
    <div style="background-image:url(assets/images/title_news2.jpg); margin-top:50px;" align="center"  class="classTitlePage"></div>
</div>
      
     	      <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:30px; padding-bottom:30px; font-size:40px; font-weight:700;">
                    NEWS & EVENTS
                </div>
            </div>     
        </div>  
        
        <div class="container">
            <div class="row">
              <?php
			 $lastNews=getNews_First();
              for($i=1;$i<=$lastNews[0][0];$i++){
			  ?>
                <div class="col-xs-12 col-sm-6 col-md-6" style="padding-top:30px; padding-bottom:30px; font-size:40px; font-weight:500;">
                  <div class="containerNews" align="left">
       	 <a href="news_detail.php?newsID=<?=$lastNews[$i][1];?>" target="_top" title="read more"> 
         <img src="<?=$lastNews[$i][7];?>" class="img-responsive" style="opacity:0.6; width:100%;">
         </a>
         <a href="news_detail.php?newsID=<?=$lastNews[$i][1];?>" target="_top" title="read more"> 
         <div class="bottom-leftNews" style="color:#000; font-size:20px; font-weight:300;" align="left">
         	<div style="background-color:#F90; color:#FFF; font-size:10px; font-weight:300; display:inline-block; padding:4px 15px 4px 15px;">
            <?=$lastNews[$i][8];?>
             </div>
             <div style="color:#FFF; font-weight:700; text-shadow: 2px 2px #888;" class="fontNEws">
             	<?=$lastNews[$i][2];?>
             </div>
             <div style="color:#FFF; font-size:12px;"><i class="far fa-edit" aria-hidden="true"></i>Metapaht School&nbsp;&nbsp;&nbsp;  
                <i class="far fa-clock" aria-hidden="true"></i> <?=$lastNews[$i][4]." ".$lastNews[$i][5]." ".$lastNews[$i][6];?></div>
                         <div style="color:#fff;"><?php echo mb_substr($lastNews[$i][3], 0, 100, 'UTF-8');?>.</div>
         </div>
         </a>
        </div>
                </div>
              <?php } ?>  
               
                
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:10px; padding-bottom:10px; font-size:10px; font-weight:500;">
                
                </div>
<!--      NEWS -->
                 <div class="col-xs-12 col-sm-6 col-md-6" style="padding-top:30px; padding-bottom:30px; font-size:35px; font-weight:500;  padding-left:10px; padding-right:10px;">
              <div style="background-color:#fff;">
               <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:20px; padding-right:20px;">
               <div style="padding-left:0px; padding-right:0px; margin-top:5px; font-weight:700; border-bottom:1px #e2e2e2 solid;">
                  ข่าวสาร / ประชาสัมพันธ์
                  </div>
                  </div>
			   <?php 
			   $newsList=getNews_First2(1);
		for($i=1;$i<= $newsList[0][0];$i++){?>	
         <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; margin-top:35px;">
            <div class="col-xs-12 col-sm-5 col-md-5">
            <div style="padding-bottom:20px; width:100%; height:220px; overflow:hidden;">
            	<a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
                <img src="<?=$newsList[$i][7]?>"  class="img-responsive">
                </a>
            </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 paddingNewsType1">
            <div style="background-color:#F90; color:#FFF; font-size:14px; font-weight:300; display:inline-block; padding:4px 15px 4px 15px;">
            	<?=$newsList[$i][8]?>
             </div>
             <a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
             <div style="font-size:22px; color:#333; font-weight:700; padding-top:10px;">
             	<?=$newsList[$i][2]?>
             </div>
             </a>
              <div style="color:#bbb; font-size:12px;">
              <i class="far fa-edit" aria-hidden="true"></i>Metapaht School&nbsp;&nbsp;&nbsp;  
                <i class="far fa-clock" aria-hidden="true"></i> <?=$lastNews[$i][4]." ".$lastNews[$i][5]." ".$lastNews[$i][6];?>

              </div>
              <div style="font-size:18px; color:#333; font-weight:300; padding-top:10px; height:100px; overflow:hidden;">
              	<?php echo mb_substr($newsList[$i][3], 0, 180, 'UTF-8');?>.
              </div>
              <a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
              <div class="menunewsIndex" style="margin-top:10px;">อ่านต่อ..</div>
              </a>
             </div>
         </div>
         <?php } ?>
              </div>
                </div>
                
  <!--              EVENT -->
                   <div class="col-xs-12 col-sm-6 col-md-6" style="padding-top:30px; padding-bottom:30px; font-size:35px; font-weight:500;  padding-left:10px; padding-right:10px;">
              <div style="background-color:#fff;">
              <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:20px; padding-right:20px;">
               <div style="padding-left:0px; padding-right:0px; margin-top:5px; font-weight:700; border-bottom:1px #e2e2e2 solid;">
                  บทความน่ารู้
                  </div>
                  </div>
               <?php 
			   $newsList=getNews_First2(2);
		for($i=1;$i<= $newsList[0][0];$i++){?>	
         <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; margin-top:35px;">
            <div class="col-xs-12 col-sm-5 col-md-5">
            <div style="padding-bottom:20px; width:100%; height:220px; overflow:hidden;">
            	<a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
                <img src="<?=$newsList[$i][7]?>"  class="img-responsive">
                </a>
            </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 paddingNewsType1">
            <div style="background-color:#F90; color:#FFF; font-size:14px; font-weight:300; display:inline-block; padding:4px 15px 4px 15px;">
            	<?=$newsList[$i][8]?>
             </div>
             <a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
             <div style="font-size:22px; color:#333; font-weight:700; padding-top:10px;">
             	<?=$newsList[$i][2]?>
             </div>
             </a>
              <div style="color:#bbb; font-size:12px;">
              <i class="far fa-edit" aria-hidden="true"></i>Metapaht School&nbsp;&nbsp;&nbsp;  
                <i class="far fa-clock" aria-hidden="true"></i> <?=$lastNews[$i][4]." ".$lastNews[$i][5]." ".$lastNews[$i][6];?>

              </div>
              <div style="font-size:18px; color:#333; font-weight:300; padding-top:10px; height:100px; overflow:hidden;">
              	<?php echo mb_substr($newsList[$i][3], 0, 180, 'UTF-8');?>.
              </div>
              <a href="news_detail.php?newsID=<?=$newsList[$i][1]?>" title="read more" target="_top">
              <div class="menunewsIndex" style="margin-top:10px;">อ่านต่อ..</div>
              </a>
             </div>
         </div>
         <?php } ?>
              </div>
                </div>
                
                
            </div>     
        </div>  


        </div>
        
<div style="height:190px;"></div>
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