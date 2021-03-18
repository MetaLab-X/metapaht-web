 
<script type="text/javascript">
	function refreshPage(){	window.location="../../<?php echo $repage;?>";	}
	function checkData()
	{
		var  Text1=document.getElementById('title1').value;
		var  Text2=document.getElementById('title2').value;
		var  Text3=document.getElementById('title3').value;


		var  Text6=document.getElementById('file1').value;

		var TitleT1=Trim(Text1);
		var TitleT2=Trim(Text2);
		var TitleT3=Trim(Text3);

	///////////////////////////
	
	///////////////////////////
	if(Text1=="" || Text1.length==0)
	{
		alert("คำเตือน : กรุณาใส่ ชื่อภาษาไทย ค่ะ");
		document.getElementById('title1').focus();
		return false;
	}
	///////////////////////////
	if(Text2=="" || Text2.length==0)
	{
		alert("คำเตือน : กรุณาใส่ ชื่อภาษาอังกฤษ ค่ะ");
		document.getElementById('title2').focus();
		return false;
	}
	///////////////////////////
	
	if(Text3=="" || Text3.length==0)
	{
		alert("คำเตือน : กรุณาใส่ URL ค่ะ");
		document.getElementById('title3').focus();
		return false;
	}
	
	if(Text6=="" || Text6.length==0)
	{
		alert("คำเตือน : กรุณาเลือกรูปภาพที่ต้องการอัพโหลดค่ะ");
		document.getElementById('file1').focus();
		return false;
	}
	///////////////
	
	else {  return true;}

}
</script>
<!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
	<?php echo   strtoupper($page);?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

<div class="pageModuleTitle" style="font-size:19px;">
	<div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">
		<a href="Admin_Panel.php?content=Customer&view=1" title="กลับหน้า SLIDE">
			<div style="border:1px #CCC solid; padding:6px; border-radius:6px; width:100px; background-color:#FF2D2D;" align="center">
				<span class="glyphicon glyphicon-log-out" style="font-size:14px; padding-right:5px; color:#fff"></span>
				<font color="#fff">BACK</font>
			</div>
		</a>
	</div><br>

	<div style="height:30px;"></div>
	<form action="<?php echo $path;?>form_slide.php" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
		<input name="set_DB" type="hidden" value="<?php echo $database;?>">
		<input name="set_ID" type="hidden" value="<?php echo $data;?>">
		<input name="set_Action" type="hidden" value="AddSlide">

		<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				TitleTH :
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<input type="text" name="title1" id="title1" class="textBox">
			</div>
		</div>
		<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				TitleEN : 
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<input type="text" name="title2" id="title2" class="textBox">
			</div>
		</div>


		<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				URL :
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<input type="text" name="title3" id="title3" class="textBox"> <font style="color:#F00; ">ลิงค์ ไม่ต้องใส่ http://</font>
			</div>
		</div>
		<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				Pic : <font style="color:#F00; font-family:Verdana, Geneva, sans-serif; font-size:11px">*</font>
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<input type="file" name="file1" id="file1"  class="Browser_IMG" style="font-size:13px;">
				<font color="#FF0000">** ขนาดของรูปภาพคือ 1600 X 620 pixcel</font>
			</div>
		</div>
		<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
			</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<button type="submit" class="btn btn-default" style="background-color:#57a000; color:#FFF; width:200px; font-size:18px;">
					<span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> บันทึกข้อมูล</button>
				</div>
			</div>
		</form>
	</div>