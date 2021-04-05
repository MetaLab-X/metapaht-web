<?php
	session_start();
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administrators</title>

<!--import ICON -->
<link rel="icon" href="assets/images/admin_icon.png" type="image/x-icon">

<!--import CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/font-awes/css/font-awesome.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/login_page.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<!--end import CSS -->
<!--import JS -->
 <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
 <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/javascript/checkword.js"></script>
 <script type="text/javascript" src="assets/javascript/md5.js"></script>
 <!--END import JS -->
<script>
function setFocus()
{
	document.getElementById("metapaht_user_name").value="";
	document.getElementById("metapaht_user_password").value="";
	document.getElementById("metapaht_user_name").focus(); 
}
function setFocus2()
{
	alert("System Can't Login Plase Check Username Or Password");
	document.getElementById("metapaht_user_name").value="";
	document.getElementById("metapaht_user_password").value="";
	document.getElementById("metapaht_user_name").focus(); 
}
function uploadok(){	window.location="index.php?content=About";	}
function validateData()
{
			var d1=document.getElementById('metapaht_user_name').value;
			var d2=document.getElementById('metapaht_user_password').value;
			var data1=Trim(d1);
			var data2=Trim(d2);
			
			if(data1.length==0){document.getElementById('metapaht_user_name').focus(); return false; }
			else if(data2.length==0){document.getElementById('metapaht_user_password').focus(); return false; }
			else
			{
				
				
					data1=md5(data1); 
					data2=md5(data2);
					document.getElementById('set_username').value=data1;
					document.getElementById('set_password').value=data2;
					document.getElementById('metapaht_user_name').value="";
					document.getElementById('metapaht_user_password').value="";
					return true;
			}
}
</script>

<script>
		$(function() {   
		
			var theWindow        = $(window),
			    $bg              = $("#bg"),
			    aspectRatio      = $bg.width() / $bg.height();
			    			    		
			function resizeBg() {
				
				if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
				    $bg
				    	.removeClass()
				    	.addClass('bgheight');
				} else {
				    $bg
				    	.removeClass()
				    	.addClass('bgwidth');
				}
							
			}
			                   			
			theWindow.resize(function() {
				resizeBg();
			}).trigger("resize");
		
		});
	</script>

</head>

<body onLoad="setFocus()">
<div class="row">
 <img src="assets/images/bg-images.jpg" id="bg" alt="">
<iframe id="checklogin" name="checklogin" src="" style="width:0px;height:0px;border:0px; display:nones;"></iframe>
	<div class="container">
    <div id="page-wrap">
    <form action="check_user_login.php" method="post" name="metapahtLogin" id="metapahtLogin" onSubmit="return validateData()" target="checklogin">
    <input name="set_username" id="set_username" type="hidden" value="">
	<input name="set_password" id="set_password" type="hidden" value="">
    	<div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;" align="center">
    	<div class="classPanelLogBG classPanellogin classMaginPosition" style="margin-top:-150px;">
  <div align="center" style="padding-bottom:15px;"><img src="assets/images/logoadmin.png" width="50%" class="img-responsive"></div>
  <div class="input-group margin-bottom-sm">
    <span class="input-group-addon" style="border-radius:5px 0px 0px 0px; background-color:#FFF; border-bottom:1px #f0f0f0 solid; border:0px;">
    	<i class="fa fa-user-circle-o" aria-hidden="true" style="background-color:#FFF; font-size:18px;"></i>
    </span>
 		<input class="form-control" type="text" placeholder="Username" id="metapaht_user_name" name="metapaht_user_name" style="border-radius:0px 5px 0px 0px; background-color:#FFF; border:1px #ffffff solid; font-size:13px; border-left:0px;">
	</div>
    
    
<div class="input-group">
  <span class="input-group-addon" style="border-radius:0px; background-color:#FFF; border-top:1px #f0f0f0 solid; border:0px;"><i class="fa fa-key fa-fw" aria-hidden="true" style="background-color:#FFF;"></i></span>
 <input class="form-control" type="password" placeholder="Password"  id="metapaht_user_password" name="metapaht_user_password" style="border-radius:0px; background-color:#FFF; border:1px #ffffff solid; font-size:12px; border-left:0px;">
</div>
<div class="input-group">
    <input name="Log In" type="submit" class="submitbutton" value="Log In">
</div>
<div align="right"  style="font-size:12px; color:#FFF; padding-top:15px; display:none;">Forgot Your Password</div>
        </div>
        </div>
        
        
        </form>
    </div>
    </div>
</div>
<!--<div>
<iframe id="checklogin" name="checklogin" src="" style="width:800px;height:300px;border:1px; display:none;"></iframe>
<div style=" position:fixed;
    top: 50%;
    left: 50%;
    margin-top: -9em; 
    margin-left: -15em; 
    border: 1px solid #ccc;
    background-color: #f3f3f3; background-color:#FFffff; border-radius:3px; padding:15px; width:300px; height:270px; overflow:hidden; -webkit-box-shadow: 7px 7px 16px 0px rgba(50, 50, 50, 0.67);-moz-box-shadow:    7px 7px 16px 0px rgba(50, 50, 50, 0.67);
box-shadow:         7px 7px 16px 0px rgba(50, 50, 50, 0.67);" align="center">
	<div style="padding:5px; font-size:45px; color:#CCC; padding-bottom:20px;">
    ADMIN PANEL
    </div>
	<form action="check_user_login.php" method="post" onSubmit="return validateData()" target="checklogin">
		<input name="set_username" id="set_username" type="hidden" value="">
		<input name="set_password" id="set_password" type="hidden" value="">

		<div class="input-group " >
			<span class="input-group-addon"><i class="fa fa-address-book fa-fw"></i></span>
			<input class="form-control" name="user_name" id="user_name" type="text" placeholder="Username">
		</div>
		<div class="input-group" style="margin-top:10px;">
			<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
			<input class="form-control" name="user_password" id="user_password" type="password" placeholder="Password">
		</div>
		<div style="padding-top:15px; padding-left:15px; padding-right:15px;" align="center">
			<input name="submit" type="submit"  class="classButtonSubmit" value="Log in">
		</div>
	</form>
	<div style="padding:5px 15px 15px 15px; color:#999;" align="right"> Forgot password</div>
</div>

</div> -->
</body>
</html>