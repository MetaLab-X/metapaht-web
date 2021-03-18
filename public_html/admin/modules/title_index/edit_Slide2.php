 <?php
 $editID=$_REQUEST['view'];
 $dataSlide=Get_ValueSlide($editID);
 ?>
 <script type="text/javascript">
   function refreshPage(){	window.location.reload();	}
   function checkData()
   {
     var  Text1=document.getElementById('title1').value;
     var  Text2=document.getElementById('title2').value;
     var  Text3=document.getElementById('title3').value;
	 var  Text4=document.getElementById('title4').value;


     var  Text6=document.getElementById('file1').value;

     var TitleT1=Trim(Text1);
     var TitleT2=Trim(Text2);
     var TitleT3=Trim(Text3);
     var TitleT4=Trim(Text4);

	///////////////////////////
	if(Text1=="" || Text1.length==0)
	{
		alert("คำเตือน : กรุณาใส่ หัวข้อ ภาษาไทย ค่ะ");
		document.getElementById('title1').focus();
		return false;
	}
	///////////////////////////
	if(Text2=="" || Text2.length==0)
	{
		alert("คำเตือน : กรุณาใส่ หัวข้อ ภาษาอังกฤษ ค่ะ");
		document.getElementById('title2').focus();
		return false;
	}
	///////////////////////////
	
	if(Text3=="" || Text3.length==0)
	{
		alert("คำเตือน : กรุณาใส่ คำอธิบาย ภาษาไทยค่ะ");
		document.getElementById('title3').focus();
		return false;
	}
	///////////////////////////
	if(Text4=="" || Text4.length==0)
	{
		alert("คำเตือน : กรุณาใส่ คำอธิบาย ภาษาอังกฤษค่ะ");
		document.getElementById('title3').focus();
		return false;
	}
	///////////////////////////

  else {  return true;}


}
</script>
<!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
  <?php echo   strtoupper("Set Indx Section ")." : ".$dataSlide[1][2];?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

<div class="pageModuleTitle" style="font-size:19px;">
 <div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">
  
 </div><br>
 
 <div style="height:20px;"></div>
 <form action="<?php echo $path;?>form_slide.php" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
  <input name="set_DB" type="hidden" value="<?php echo $database;?>">
  <input name="slide_ID" type="hidden" value="<?php echo $dataSlide[1][1];?>">
  <input name="set_Action" type="hidden" value="EditSlide">

  <div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
    <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
     Title Big TH :
   </div>
   <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
    <input type="text" name="title1" id="title1" class="textBox" value="<?=$dataSlide[1][2];?>">
  </div>
</div>
<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
  <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
   Title Big EN : 
 </div>
 <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
  <input type="text" name="title2" id="title2" class="textBox" value="<?=$dataSlide[1][4];?>">
</div>
</div>

<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
    <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
     Title Small TH :
   </div>
   <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
    <input type="text" name="title3" id="title3" class="textBox" value="<?=$dataSlide[1][3];?>">
  </div>
</div>

<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
    <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
     Title Small EN :
   </div>
   <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
    <input type="text" name="title4" id="title4" class="textBox" value="<?=$dataSlide[1][5];?>">
  </div>
</div>

<?php if($editID=="2" || $editID=="3"){?>
<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
  <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">

  </div>
  <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
    <img src="../<?=$dataSlide[1][6];?>" width="350" style="border:1px #000 solid; max-width:100%;">
  </div>
</div>
<div class="container" style="padding-top:10px; padding-left:0px; padding-right:0px;">
  <div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
   Pic : <font style="color:#F00; font-family:Verdana, Geneva, sans-serif; font-size:11px">*</font>
 </div>
 <div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
  <input type="file" name="file1" id="file1"  class="Browser_IMG" style="font-size:13px;">
  <font color="#FF0000">** ขนาดของรูปภาพคือ 1600 X 620 pixcel และเป็น .jpg หรือ .jpeg</font>
</div>
</div>
<?php } ?>
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