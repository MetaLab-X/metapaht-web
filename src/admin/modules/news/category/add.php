<?php //  $dataSlide=Get_plan_Cat();?>
<script type="text/javascript">
  function refreshPage(){	window.location="../../<? echo $repage;?>";	}
  	function checkData()
{
	var  Text1=document.getElementById('title1').value;
	var TitleT1=Trim(Text1);
	
	var  Text2=document.getElementById('title2').value;
	var TitleT2=Trim(Text2);
	
	var  Text3=document.getElementById('title3').value;
	var TitleT3=Trim(Text3);
	
	var  Text4=document.getElementById('title4').value;
	var TitleT4=Trim(Text4);
	
	var  Text5=document.getElementById('title5').value;
	var TitleT5=Trim(Text5);
	
	var  Text6=document.getElementById('title6').value;
	var TitleT6=Trim(Text6);
	
	var  Text7=document.getElementById('title7').value;
	
		///////////////////////////
	if(TitleT1=="" || TitleT1.length==0)
	{
		alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่สินค้า ภาษาไทย ค่ะ");
		document.getElementById('title1').style.backgroundColor="#FFE1E1";
		document.getElementById('title1').focus();
		return false;
	}
	else if(TitleT1!="" || TitleT1.length!=0){document.getElementById('title1').style.backgroundColor="#FFFFFF";}
	
	if(TitleT2=="" || TitleT2.length==0)
	{
		alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่สินค้า ภาษาอังกฤษ ค่ะ");
		document.getElementById('title2').style.backgroundColor="#FFE1E1";
		document.getElementById('title2').focus();
		return false;
	}
	else if(TitleT2!="" || TitleT2.length!=0){document.getElementById('title2').style.backgroundColor="#FFFFFF";}
	
	if(TitleT3=="" || TitleT3.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Keyword ภาษาไทย ค่ะ");
		document.getElementById('title3').style.backgroundColor="#FFE1E1";
		document.getElementById('title3').focus();
		return false;
	}
	else if(TitleT3!="" || TitleT3.length!=0){document.getElementById('title3').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT4=="" || TitleT4.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Keyword ภาษาอังกฤษ ค่ะ");
		document.getElementById('title4').style.backgroundColor="#FFE1E1";
		document.getElementById('title4').focus();
		return false;
	}
	else if(TitleT4!="" || TitleT4.length!=0){document.getElementById('title4').style.backgroundColor="#FFFFFF";}
	///////////////
	
	
	if(TitleT5=="" || TitleT5.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Description ภาษาไทย ค่ะ");
		document.getElementById('title5').style.backgroundColor="#FFE1E1";
		document.getElementById('title5').focus();
		return false;
	}
	else if(TitleT5!="" || TitleT5.length!=0){document.getElementById('title5').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT6=="" || TitleT6.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Description ภาษาอังกฤษ ค่ะ");
		document.getElementById('title6').style.backgroundColor="#FFE1E1";
		document.getElementById('title6').focus();
		return false;
	}
	else if(TitleT6!="" || TitleT6.length!=0){document.getElementById('title6').style.backgroundColor="#FFFFFF";}
	///////////////
	
	
	if(Text7=="" || Text7.length==0)
	{
		alert("คำเตือน : กรุณาเลือกรูปภาพที่ใช้แสดงค่ะ");
		document.getElementById('title7').style.backgroundColor="#FFE1E1";
		document.getElementById('title7').focus();
		return false;
	}
	else if(Text7!="" || Text7.length!=0){document.getElementById('title7').style.backgroundColor="#FFFFFF";}
	///////////////
	
	else {  return true;}

}
  </script>
    <!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page);?> : CATEGORY
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->
  
   <div class="pageModuleTitle" style="font-size:19px;">
      <div class="col-xs-12 col-sm-12 col-md-12" align="left" style=" padding:15px; font-size:19px; border:1px #999 solid; border-radius:7px;">
      <form action="<?php echo $path;?>cat_form_category.php" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
<input name="set_DB" type="hidden" value="<?php echo $database;?>">
<input name="set_ID" type="hidden" value="<?php echo $data;?>">
<input name="set_Action" type="hidden" value="AddCategory">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="14%" align="left" valign="middle">Categories Name TH : <font style="color:#F00">*</font></td>
      <td width="86%" align="left" valign="middle" style="padding-right:15px; padding-bottom:5px;">
        <input type="text" name="title1" id="title1" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาไทย"></td>
    </tr>
    <tr>
      <td align="left" valign="middle" style="padding-bottom:15px;">Categories Name EN : <font style="color:#F00">*</font></td>
      <td align="left" valign="middle" style="padding-right:15px; padding-bottom:15px;"><input type="text" name="title2" id="title2" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาอังกฤษ"/></td>
    </tr>
    <tr>
      <td align="left" valign="middle" style="border-top:1px #999 dotted; padding-top:15px;">Meta Tag Keywords TH: </td>
      <td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-top:1px #999 dotted; padding-top:15px;"><input type="text" name="title3" id="title3" class="textBox" placeholder="ตัวอย่าง : เครื่องเสียง, ลำโพง, ไมค์"/></td>
    </tr>
    <tr>
      <td align="left" valign="middle" style="border-bottom:1px #999 dotted; padding-bottom:15px;">Meta Tag Keywords EN: </td>
      <td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title4" id="title4" class="textBox" placeholder="ตัวอย่าง : Loudspeaker, microphone , audioconference"/></td>
    </tr>
    <tr>
      <td align="left" valign="middle" style="padding-top:15px;">Description TH :</td>
      <td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; padding-top:15px;"><input type="text" name="title5" id="title5" class="textBox"  placeholder="คำอธิบายหมวดหมู่สินค้าภาษาไทย"/></td>
    </tr>
    <tr>
      <td align="left" valign="middle" style="padding-bottom:15px; border-bottom:1px #999 dotted;">Description EN :</td>
      <td align="left" valign="middle" style="padding-right:15px;  border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title6" id="title6" class="textBox" placeholder="คำอธิบายหมวดหมู่สินค้าภาษาอังกฤษ"/></td>
    </tr>
    <tr>
      <td height="20" align="left" style="padding-bottom:8px;">Image : </td>
      <td height="20" align="left" style="padding-bottom:8px; padding-top:15px;">
      <input type="file" name="title7" id="title7"  class="Browser_IMG" style="font-size:13px;" accept="image/x-png,image/gif,image/jpeg">
  		<font color="#FF0000">** ขนาดของรูปภาพคือ 470 X 246 pixcel และเป็น .jpg หรือ .jpeg </font>
      </td>
    </tr>
    <tr>
      <td height="20" align="left" style="padding-bottom:8px;">&nbsp;</td>
      <td height="20" align="left" style="padding-bottom:8px; padding-top:15px;">
        <button type="submit" class="btn btn-default" style="background-color:#57a000; color:#FFF; width:200px; font-size:18px;"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> บันทึกข้อมูล</button></td>
    </tr>
  </table>
  </form>
      </div><br>
  <div style="height:180px;"></div><br>
  
  
  	<div class="resSlide">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  <tr>
    <td width="40" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Plan Category</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Show</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;border-right:1px #e8e8e8 solid;">Order</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Edit</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">Delete</td>
  </tr>
  <?php if($dataSlide[0]==0 || $dataSlide[0]==""){ ?>
    <tr>
    <td height="50" colspan="6" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี PRODUCT Category ค่ะ</td>
    </tr>
  <?php
  }
  else {
  $g=1;
  for($i=1;$i<=$dataSlide[0][0];$i++){
	  if($g%2!="0"){$bg="#f9f9f9";}
	  else if($g%2=="0"){$bg="#FFFFFF";}
	  if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
	  else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";} 
  ?>
  <tr>
    <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
	<a id="slide" name="slide"></a>
	<?php echo $g;?></td>
    <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][2];?></td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
   <?php if($dataSlide[$i][4]==1) { ?><a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:24px; color:#06F;"></span></a><?php } ?>
      <?php if($dataSlide[$i][4]==0) { ?><a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:24px; color:#F00;"></span></a><?php }?>
    </td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
    <table width="50" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" width="25"><?php if($i!="1"){?>
        <a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i-1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งขึ้น">
        <span class="glyphicon glyphicon-triangle-top"  style="color:#090; font-size:18px;"></span>
		</a>
		<?php }?></td>
        <td align="center" width="25"><?php if($i!=$dataSlide[0][0]){?>
        <a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i+1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งลง">
        <span class="glyphicon glyphicon-triangle-bottom" style="color:#090; font-size:18px;"></span>
		</a>
		<?php }?></td>

      </tr>
    </table></td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
    <a href="<?php echo  $pathEdit;?><?php  echo $dataSlide[$i][1];?>"  title="แก้ไขข้อมูล" ><span class="glyphicon glyphicon-edit" style="font-size:24px; color:#09F;"></span></a>
    </td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
    
    <a href="<?php echo $pathDel;?>?delID=<?php  echo $dataSlide[$i][1];?>&action=DelCat" target="iframePath" title="ลบข้อมูล" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:26px; color:#F00;"></span></a>
    
    </td>
  </tr>
  <?php $g=$g+1;} }?>
</table>
</div>

<div class="resSlide2" style="border-left:1px #CCC solid; border-right:1px #CCC solid; border-top:1px #CCC solid;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <?php 
    $g=1;
  for($i=1;$i<=$dataSlide[0][0];$i++){
	  if($g%2!="0"){$bg="#f9f9f9";}
	  else if($g%2=="0"){$bg="#FFFFFF";}
	  if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
	  else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";} 
	  
	  ?>
  <tr>
    <td width="60%" style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-top:5px; padding-bottom:5px; padding-left:10px;" align="left"><?php echo $dataSlide[$i][2];?></td>
     <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
   <?php if($dataSlide[$i][4]==1) { ?><a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:15px; color:#06F;"></span></a><?php } ?>
      <?php if($dataSlide[$i][4]==0) { ?><a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:15px; color:#F00;"></span></a><?php }?>
    </td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
    <table width="20" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" width="25"><?php if($i!="1"){?>
        <a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i-1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งขึ้น">
        <span class="glyphicon glyphicon-triangle-top"  style="color:#090; font-size:13px;"></span>
		</a>
		<?php }?></td>
        <td align="center" width="25"><?php if($i!=$dataSlide[0][0]){?>
        <a href="<?php echo $path;?>cat_update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i+1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งลง">
        <span class="glyphicon glyphicon-triangle-bottom" style="color:#090; font-size:13px;"></span>
		</a>
		<?php }?></td>

      </tr>
    </table></td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
    <a href="<?php echo  $pathEdit;?><?php  echo $dataSlide[$i][1];?>"  title="แก้ไข Slide" ><span class="glyphicon glyphicon-edit" style="font-size:15px; color:#09F;"></span></a>
    </td>
    <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
    
    <a href="<?php echo $pathDel;?>?delID=<?php  echo $dataSlide[$i][1];?>&action=DelCat" target="iframePath" title="ลบ Slide" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:15px; color:#F00;"></span></a>
    
    </td>
  </tr>
  <?php } ?>
</table>

</div>
</div>