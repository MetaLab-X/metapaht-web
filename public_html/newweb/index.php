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


    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/swipper.min.css"/>
    <!--<link rel="stylesheet" href="assets/css/style.min.css"/>-->
    <link rel="stylesheet" href="assets/css/AddCss.css"/>
    <link rel="stylesheet" href="assets/css/media_query.css"/>
    <link rel="stylesheet" href="assets/css/media_res.css"/>
  <link rel="stylesheet" href="assets/css/layerslider.css" type="text/css" />
   <link rel="stylesheet" href="fancyBox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="fancyBox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
        <link rel="stylesheet" type="text/css" href="fancyBox/source/helpers/jquery.fancybox-buttons.css"/>
             <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
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
        <div class="container" style="padding-top:18px;">
            <nav class="navigation nav-left">
                <a href="./" class="nav-item nav-brand" title="Metapaht Primary School">
                    <img src="assets/images/logo/logo2.png" alt="Metapaht Primary School" />
                </a>
        </nav>
            <nav class="navigation nav-right" role="navigation">
<a href="#" class="nav-item nav-anchor nav-click" id="h" title="หน้าแรก" data-scroll="home"  style="font-size:17px; letter-spacing:1px;">HOME</a>
<a href="#" class="nav-item nav-anchor nav-click" title="เกี่ยวกับเรา" data-scroll="about" style="font-size:17px;  letter-spacing:1px;">ABOUT US</a>
<a href="#" class="nav-item nav-anchor nav-click" title="โปรโมชั่น" data-scroll="Mission" style="font-size:17px;  letter-spacing:1px;">MISSION & VISION</a>
<a href="#" class="nav-item nav-anchor nav-click" title="หลักสูตร" data-scroll="course" style="font-size:17px;  letter-spacing:1px;">COURSE</a>
<a href="#" class="nav-item nav-anchor nav-click" title="สิ่งอำนวยความสะดวก" data-scroll="Facilities" style="font-size:17px;  letter-spacing:1px;">FACILITIES</a>
<a href="#" class="nav-item nav-anchor nav-click" title="ติดต่อเรา" data-scroll="direction" style="font-size:17px;  letter-spacing:1px;">CONTACT</a>
                <span class="social-group">
            <a href="https://www.facebook.com/metapaht2017/" class="nav-item nav-social nav-click" title="metapaht" target="_blank">
                <img src="assets/images/logo/facebook-o_65x65.png" alt="Fb metapaht">
            </a>
            <a href="http://line.me/ti/p/~@metapaht" class="nav-item nav-social nav-click" title="Line metapaht" target="_blank">
                <img style="height: 20px;width: 20px;" src="assets/images/logo/LINE_Icon.png" alt="Line metapaht" />
            </a>
          </span>
          
          <!-- <span class="nav-item nav-language is-disabled" title="TH">
            TH
            <span class="language-list" style="font-size:11px;">
              <a href="#" class="language-item nav-click">TH</a>
              <a href="#" class="language-item nav-click">EN</a>
            </span>
                </span> -->
</nav>
            <div class="hamburger-container">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </div>
<!-- MENU PART -->

<div id="wrapper">
	<?php include "slide.php";?>
</div>   
    
       <!--<div style="height: 600px;"></div> -->
<!-- ABOUT PART -->
<?php $paragarph1=getdata_editer(1);?>
 <div class="isan-bg scroll-content overpagex" data-anchor="about">
     <img src="assets/images/part_about/about_center.png" alt="" />
            <div class="main-bg">
                <div class="container" style="margin-top: -50px;">
                    <div class="grid-half pull-left downabout classPaddingAbout">
                        <h1 class="blue invisible fontmeta" data-sr="enter bottom move 20px" style="color:#2156ac; text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);"><!--โรงเรียนเมธาพัฒน์--><?=$paragarph1[2]?></h1>
                        <p class="description invisible" data-sr="enter left move 20px">
                           <!-- <strong >"เราตั้งใจสร้างโรงเรียนที่เป็น นวัตกรรมใหม่ ให้ชาวโคราช ได้สัมผัสในราคาที่คุ้มค่า"</strong>
                      
                            <br class="_About">โรงเรียนแห่งนวัตกรรม ก้าวล้ำสู่สากล<br class="_About">
                                    
                                  <strong>  ดังนั้นเด็กโรงเรียนเมธาพัฒน์</strong> <br class="_About">
                                    จึงพร้อมสำหรับการต่อยอด
                                    ทั้งในระบบการศึกษาไทยหรือต่างประเทศ -->
                                  <div class="fontAboutSize">
                                    <?=$paragarph1[4]?>
                                    </div>
                        </p>
                        

                    </div>
                </div>
            </div>
            <div class="inner-bg"></div>
        </div>
<!-- END ABOUT PART -->

<!-- Mission & Vision PART -->
<?php $paragarph2=getdata_editer(2);?>
<div class="season scroll-content  mission_margin_top" data-anchor="Mission" >
            <div class="pink-wave">
                <div class="container">
                    
                    <div class="grid-half pull-right mission_box_text">
                        <h1 class="white invisible" data-sr="enter bottom move 20px" style="margin-top: -20px; text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);"><!--วิสัยทัศน์และพันธกิจ--><?=$paragarph2[2];?></h1>
                        <p class="description white invisible mission_box_detail" data-sr="wait 0.3s, enter bottom move 20px" style="text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);">
                           <!--  โรงเรียนเมธาพัฒน์ตั้งใจจะสร้างโรงเรียนที่เป็นนวัตกรรมใหม่มาให้ชาวโคราช <br class="_d">
                                โดยนำจุดเด่นของโรงเรียนนานาชาติ คือ <br class="_d">
                                    <font class="font_mission_detail2">สามารถใช้ภาษาอังกฤษได้อย่างคล่องแคล่วและมีเนื้อหาสาระอันเป็นสากล</font> 
                                <br class="_d"><span>มาผนวกเข้ากับหลักสูตรของไทย คือ  </span><br class="_d">
                                <font class="font_mission_detail2"> สามารถฟัง  พูด อ่าน เขียนภาษาไทยได้อย่างลึกซึ้ง รวมถึงเรียนรู้สังคม  <br class="_d">
                                วัฒนธรรม อันเป็นรากเหง้าของชาติเรา </font><br class="_d">ดังนั้นเด็กเมธาพัฒน์จึงพร้อมต่อยอดในระบบ
                                    การศึกษาในประเทศหรือต่างประเทศได้ -->
                                    <div class="fontMissionSize fontcolorWhite"><?=$paragarph2[4];?></div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="season-bg overpagex"></div>
            
            <div class="bottom-bg" style="overflow-x:hidden; width:100%;">
                <img  src="assets/images/course/4_2560x214.png" class="bottom_child" />
            </div>
        </div>
<!-- END Mission & Vision PART -->

<!-- Course PART -->
<?php $paragarph3=getdata_editer(3);?>
<div class="riverwalk scroll-content overpagexy" data-anchor="course" >
    <div class="container">
        <div class="margin-grid-course">
            <div class="grid-half pull-left">
                    <h1 class="green invisible" data-sr="enter bottom move 20px" style=" text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);"><?=$paragarph3[2];?></h1>
                    <p class="description invisible" data-sr="wait 0.3s, enter bottom move 20px">
                        <!-- <span data-sr="enter bottom move 20px" style=" text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);font-size: 30px;color: #1C325F;">นวัตกรรมทางหลักสูตร</span>
                        <br class="_d"><font style="color:#333;">"ทีมผู้สร้างหลักสูตร ทำการวิเคราะห์ แบบทดสอบทางการศึกษาแห่งชาติ (O-NET)<br class="_d">
                            และแบบประเมินผลนักเรียนนานาชาติ (PISA) ได้องค์ความรู้ที่เป็นแก่นของสาระวิชา<br class="_d"> 
                                นำมาร้อยเรียงเป็นเรื่องราวที่ทันสมัย น่าสนใจ</font><br class="_d">
                                    <strong style="color:#1C325F;">ผ่านการจัดประสบการณ์ตรง เด็กๆ ได้เรียนรู้อย่างสนุกสนาน ส่งผลให้เกิดความรู้<br class="_d">อย่างยั่งยืน มากกว่าการท่องจำหรือคัดเขียน"</strong>-->
                                   <div class="fontMissionSize" data-sr="enter bottom move 20px"> <?=$paragarph3[4];?></div>
                    </p>
                </div>
<div class="grid-half pull-right" style="margin-top: 10px;">
<?php $paragarph4=getdata_editer(4);?>
<h1 class="green invisible" data-sr="enter bottom move 20px" style=" text-shadow: 1px 1px 1px rgba(150, 150, 150, 0.5);"><?=$paragarph4[2];?></h1>
<p class="description invisible" data-sr="wait 0.3s, enter bottom move 20px">
 <!-- <span class="_d"></span><strong style="color: #1b3360;font-size: 24px;">รศ.ดร.นาตยา ปิลันธนานนท์</strong><br class="_d">
                            อดีตนายกสมาคมหลักสูตรและการสอนแห่งประเทศไทย
 <br class="_d"><strong style="color: #1b3360;font-size: 24px;">ดร.ศิริรัตน์ ศรีสอาด</strong><br class="_d">
<font style="color: #333;"> ผู้เชี่ยวชาญ หลักสูตรและการสอนการพัฒนาทรัพยากร <br class="_d">การเรียนรู้และการจัดการการเรียนรู้ มหาวิทยาลัยเกษตรศาสตร์ พร้อมคณะ</font>-->
<div class="fontMissionSize" data-sr="enter bottom move 20px"> <?=$paragarph4[4];?></div>
                    </p>
                </div>
         </div>
            </div>
            <div class="riverwalk-bg overpagexy">
             <div class="riverwalk-inner"></div>
            </div>
        </div> 
<!-- END Course PART -->

<!--  Fac PART -->
<?php $paragarph5=getdata_editer(5);?>
<div class="riverwalk1 scroll-content overpagexy" data-anchor="Facilities" >
    <div class="container classCoursePaddingTop">
               <div class="grid-half pull-left " style="margin-top: 10px;">
        	<h1 class="green invisible" data-sr="enter bottom move 20px"><!--สิ่งอำนวยความสะดวก--><?=$paragarph5[2];?></h1>
            <p class="description invisible fac_text_box" data-sr="wait 0.3s, enter bottom move 20px">
            	<!--โรงเรียนเมธาพัฒน์ ตั้งอยู่บนถนนบายพาส สาย ฉ มีขนาดที่ดิน 12 ไร่ ประกอบไปด้วยอาคารเรียน อาคารอำนวยการ อาคารสระว่ายน้ำ โรงอาหาร ห้องประชุม โรงยิมเนเซียม มีห้องปฎิบัติการวิทยาศาสตร์ ห้องปฎิบัติการคณิตศาสตร์ ห้องดนตรี ห้องสมุด ห้องศิลปะและโซนแสดงนิทรรศการงานศิลป์ ทุกมุมของเมธาพัฒน์ออกแบบให้เป็นมุมแห่งการเรียนรู้ ทีมสถาปนิกยังได้นำแนวคิดการออกแบบอาคารเชื่อมโยงกับธรรมชาติ เมื่อใดก็ตามที่เด็กๆ เดินออกจากห้องเรียน เด็กๆจะได้สัมผัสกับธรรมชาติรอบตัวทันที ทุกการเอาใจใส่เหล่านี้ เราเชื่อว่าจะมีส่วนสำคัญต่อการพัฒนาความคิดสร้างสรรค์ และส่งเสริมให้เกิดการเรียนรู้แบบไม่มีที่สิ้นสุด -->
                
                <div class="fontMissionSize" data-sr="enter bottom move 20px"> <?=$paragarph5[4];?></div>
            </p>
        </div>
        <div class="grid-half pull-right" style="margin-top: 10px;">
        	<h1 class="green invisible" data-sr="enter bottom move 20px">สิ่งอำนวยความสะดวก</h1>
        	<div class="description invisible" data-sr="enter 20px" >
                    
                    <div style="padding-left: 20px;padding-right: 20px;">           
                        <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 0px;">             
        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
            <img class="img-responsive center-block" src="assets/images/facilities/icon/MPS.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> อาคารเรียน</div> 
        </div>
      <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
          <img class="img-responsive center-block" src="assets/images/facilities/icon/Swim.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> สระว่ายน้ำ</div> 
        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
                            <img class="img-responsive center-block" src="assets/images/facilities/icon/Food-C.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> โรงอาหาร</div> 
        </div>
            </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 0px;">  
                        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
                            <img class="img-responsive center-block" src="assets/images/facilities/icon/Libary.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> ห้องสมุด</div> 
        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
                            <img class="img-responsive center-block" src="assets/images/facilities/icon/Lab.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> ห้องทดลอง</div> 
        </div> 
        <div class="col-xs-4 col-sm-4 col-md-4" style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
            <img class="img-responsive center-block" src="assets/images/facilities/icon/Art-Room.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> ห้องศิลปะ</div> 
        </div>
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 0px;">  
      <div class="col-xs-4 col-sm-4 col-md-4" style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
          <img class="img-responsive center-block" src="assets/images/facilities/icon/Media.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;"> ห้องคอมพิวเตอร์</div> 
        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
                            <img class="img-responsive center-block" src="assets/images/facilities/icon/Football.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;">สนามกีฬา</div> 
        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 " style="padding-left: 0px;padding-right: 20px;padding-top: 0px;padding-bottom: 30px;width: 80px;"  >        
                            <img class="img-responsive center-block" src="assets/images/facilities/icon/Play-G.png"  alt=""/>
          <div align="center"  style="color:#3399CC;font-size: 18px;padding-top: 5px;">สนามเด็กเล่น </div> 
        </div>
                       
                </div>          
                       
                             
                            
                             
  </div>
                </div>
                
             
       </div>
            </div>
            <div class="riverwalk-bg1">
                <div class="riverwalk-inner1"></div>
            </div>
        </div> 
<!--  Fac PART -->
  
                     <!--Map PART -->
                     <?php $paragarph7=getdata_editer(7);?>
                     <div class="direction"style="padding-bottom: 100px;margin-top: -50px;">
                         
            <div class="time-container">
                <div class="container video_margin_top">
                    <div class="col-md-6" data-sr="wait 0.3s, enter bottom move 20px"  style="z-index: 99999; padding: 20px;">
                        <a class="various fancybox.iframe" href="assets/images/video/Hope.mp4">
                        <div class="containervideo center-block">
                            <img src="assets/images/video/1.png" alt="" class="image" style="width:100%" />
                                <div class="middle">
                                     <div class="text"><span style="font-size: 40px;padding-left: 5px;" class="glyphicon glyphicon-play"></span></div> 
                                </div>
                        </div></a>
                    </div>

                    <div class="col-md-6" data-sr="wait 0.6s, enter bottom move 20px"  style="padding: 20px;">
                        <a class="various fancybox.iframe" href="assets/images/video/matapath_3d.mp4">
                        <div class="containervideo center-block">
                            <img src="assets/images/video/2.png" alt="" class="image" style="width:100%" />
                                <div class="middle">
                                     <div class="text"><span style="font-size: 40px;padding-left: 5px;" class="glyphicon glyphicon-play"></span></div> 
                                </div>
                        </div></a>
                    </div>
                    
                </div>
               
  
            </div>
                                
                     </div>
                     <div class="direction scroll-content" data-anchor="direction" style="padding-bottom: 100px;margin-top: -150px;">
                         <div class="direction-container" style="padding-top: 50px;">
                <div class="container">
                    <div class="grid-half pull-left" >
                        <div><h1 class="map-blue invisible" data-sr="enter bottom move 20px"><!--วิธีเดินทาง--><?=$paragarph7[2];?></h1>
                        <p class="description invisible" data-sr="wait 0.3s, enter bottom move 20px">
                            <!--<strong>ตั้งอยู่บนทำเลเดินทางสะดวก</strong><br>ต.หนองบัวศาลา อ.เมือง จ.นครราชสีมา <strong><br> เข้าออกได้หลายเส้นทาง</strong>  -->  <div class="fontMissionSize" data-sr="enter bottom move 20px"> <?=$paragarph7[4];?></div>
                                    </p></div>
                    </div>
                    <div class="map invisible" data-sr="wait 0.6s, enter bottom move 20px" style="">
   <a class="fancybox-effects-b" href="assets/images/map/MPS-MAP.gif" data-fancybox-group="gallery" title="แผนที่ Metapaht">
                        <img src="assets/images/map/MPS-MAP.gif" alt="Map" style="border:0px;"/>
    </a>
    
                    </div>
                    <div class="map-link">
                        
                        <a href="https://maps.google.com/?saddr=Current+Location&daddr=โรงเรียนเมธาพัฒน์+ตำบล+หัวทะเล+อำเภอเมืองนครราชสีมา+นครราชสีมา+30000+ประเทศไทย" id="google-map" target="_blank"><img src="assets/images/map/google-map.png" alt="Google Map" /></a>
                    </div>
                </div>
            </div>
        </div>
                     
                     <!--End Map PART -->          
        </div>
                    <!-- start footer-->
             <div id="footer">
        <div class="container">
            <div class="footer-content ">
                <div class="col-md-6 col-sm-12 col-xs-12">
                <p class="footer-call">Contract Us: <a style="color: #FFF;font-size: 18px;" href="tel:0611983535"><font style="color:#FFF">061 198 3535</font></a>
                    <font style="color:#fff;font-size: 16px;"> หรือ </font> <a style="color: #FFF;font-size: 18px;" href="tel:0862553955"><font style="color:#FFF">086 255 3955</font></a>
                
                </p>
                
                
                <p class="footer-address">2222 หมู่ 8 ต.หนองบัวศาลา อ.เมือง จ.นครราชสีมา</p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 " >
                <div style="padding:10px 0px; font-size:10px" class="fontItim footer-margin">
                       <a href="https://www.facebook.com/metapaht2017" target="_blank" style="color:#FFF;padding-right: 15px;"> <span> <img width="25" src="assets/images/logo/facebook-o_65x65.png" /></span></a>
                       <a href="http://line.me/ti/p/~@metapaht" target="_blank" style="color:#FFF;"><span><img width="30" src="assets/images/logo/LINE_Icon.png" /></span></a>
                </div>
                </div>
            </div>
            
        </div>
    </div>        
            <!-- End footer-->  

            
 <div class="loading-page is-active">
     <img src="assets/images/logo/load.png" alt="Metapath Load" />
    </div>
    
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