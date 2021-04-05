<?
	session_start();
	if($_SESSION["user_type"]!="" || $_SESSION["user_type"]=="admin" || $_SESSION["user_type"]=="user"){
		//if($_SESSION["kd_userType1"]==""){
	?>
    <?php
	include "libraries/config/config.php";
    $page=$_REQUEST['content'];
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

 <link rel="SHORTCUT ICON" href="assets/images/admin_icon.png"/>
 <link rel=”icon” href="assets/images/admin_icon.png" type=”image/x-icon”/>
<link rel="stylesheet" href="assets/css/style.css" />
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.theme.css">
<link rel="stylesheet" href="assets/css/jquery.bxslider.css">
<link href="assets/css/bootstrap.css?v=1" rel="stylesheet" type="text/css">
<link href="assets/css/style_admin.css" rel="stylesheet" type="text/css">
<link href="assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="plugins/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="plugins/ckfinder/ckfinder.js"></script>
  	 <script type="text/javascript" src="assets/javascript/checkword.js"></script>

	<!-- เรียกใช้งาน Fancybox -->
   	<script type="text/javascript" src="plugins/fancybox/jquery-1.10.1.min.js"></script>
   	<script type="text/javascript" src="plugins/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="plugins/fancybox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript" src="plugins/fancybox/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="plugins/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="plugins/fancybox/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="plugins/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="plugins/fancybox/index.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- /เรียกใช้งาน Fancybox -->


<script>
$(function() {
	var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	$("ul.navbar-nav li a").each(function(){
	if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
	$(this).addClass("active-menu");
	})
	});
 function refreshPageInd(){	window.location="index.php";}
 
</script>
<style>
	body {
	background-color:#fff;
}
</style>
</head>
<body>

<iframe id="iframePath" name="iframePath" src="" style="width:0px;height:0px;border:0"></iframe>

<div class="container" style="width:100%; padding:0px; margin:0px;">
    <nav class="navbar navbar-default">
      <div class="container-fluid">        
     <div class="row titleHead" style="padding-top:10px; padding-bottom:10px; margin:0px; background-color:#2b3643; position:fixed; z-index:999; width:100%;">
        		<div class="col-md-12" align="left" style="padding-top:0px; padding-left:20px; color:#FFF;" >
                <table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="5%" align="left"><span class="glyphicon glyphicon-cog" aria-hidden="true" style="padding:5px; font-size:18px; color:#F90;"></span></td>
    <td width="95%" align="left" style="font-size:21px;">ADMIN PANEL</td>
  </tr>
</table>
                </div>
        </div>
        <!-- Brand and toggle get grouped for better mobile display -->
      <?php include "config_menu.php";?>
      </div><!-- /.container-fluid -->
    </nav>
</div>
<div class="ConCT">
<div class="divspaceHead1">

<!-- MODULE -->
<?php include "config_page.php";?>
<!--END MODULE -->

</div>
</div>

<!--FOOTER -->
<div style="background-color:#2b3643; height:50px; width:100%;"></div>
<!--END FOOTER -->

<!--TOTOP -->
<div align="right" style="border:0px;">
	<p id="back-top" style="border:0px;">
	    <a href="#top" title="to TOP"><span class="glyphicon glyphicon-circle-arrow-up" aria-hidden="true"></span></a>
 	</p>
</div>
<!--END TOTOP-->

</body>
</html>
<?php 
mysql_close();
} else {
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
}		 
?>