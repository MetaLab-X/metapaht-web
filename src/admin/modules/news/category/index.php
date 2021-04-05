<?php 
include $path."/"."category/function/function.php";
$dataSlide=Get_category_List();
?>
<script type="text/javascript">
	function refreshPage(){	window.location="../../../../<?php echo $repage;?>";	}
	
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
			alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่ภาษาไทย ค่ะ");
			document.getElementById('title1').style.backgroundColor="#FFE1E1";
			document.getElementById('title1').focus();
			return false;
		}
		else if(TitleT1!="" || TitleT1.length!=0){document.getElementById('title1').style.backgroundColor="#FFFFFF";}
		
		if(TitleT2=="" || TitleT2.length==0)
		{
			alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่ ภาษาอังกฤษ ค่ะ");
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

function checkData1()
{
	var  Text1=document.getElementById('title11').value;
	var TitleT1=Trim(Text1);
	
	var  Text2=document.getElementById('title12').value;
	var TitleT2=Trim(Text2);
	
	var  Text3=document.getElementById('title13').value;
	var TitleT3=Trim(Text3);
	
	var  Text4=document.getElementById('title14').value;
	var TitleT4=Trim(Text4);
	
	var  Text5=document.getElementById('title15').value;
	var TitleT5=Trim(Text5);
	
	var  Text6=document.getElementById('title16').value;
	var TitleT6=Trim(Text6);
	
	var  Text7=document.getElementById('title17').value;
	
		///////////////////////////
		if(TitleT1=="" || TitleT1.length==0)
		{
			alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่ ภาษาไทย ค่ะ");
			document.getElementById('title11').style.backgroundColor="#FFE1E1";
			document.getElementById('title11').focus();
			return false;
		}
		else if(TitleT1!="" || TitleT1.length!=0){document.getElementById('title11').style.backgroundColor="#FFFFFF";}
		
		if(TitleT2=="" || TitleT2.length==0)
		{
			alert("คำเตือน : กรุณาใส่ชื่อหมวดหมู่ ภาษาอังกฤษ ค่ะ");
			document.getElementById('title12').style.backgroundColor="#FFE1E1";
			document.getElementById('title12').focus();
			return false;
		}
		else if(TitleT2!="" || TitleT2.length!=0){document.getElementById('title12').style.backgroundColor="#FFFFFF";}
		
		if(TitleT3=="" || TitleT3.length==0)
		{
			alert("คำเตือน : กรุณาใส่ Tag Keyword ภาษาไทย ค่ะ");
			document.getElementById('title13').style.backgroundColor="#FFE1E1";
			document.getElementById('title13').focus();
			return false;
		}
		else if(TitleT3!="" || TitleT3.length!=0){document.getElementById('title13').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT4=="" || TitleT4.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Keyword ภาษาอังกฤษ ค่ะ");
		document.getElementById('title14').style.backgroundColor="#FFE1E1";
		document.getElementById('title14').focus();
		return false;
	}
	else if(TitleT4!="" || TitleT4.length!=0){document.getElementById('title14').style.backgroundColor="#FFFFFF";}
	///////////////
	
	
	if(TitleT5=="" || TitleT5.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Description ภาษาไทย ค่ะ");
		document.getElementById('title15').style.backgroundColor="#FFE1E1";
		document.getElementById('title15').focus();
		return false;
	}
	else if(TitleT5!="" || TitleT5.length!=0){document.getElementById('title15').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT6=="" || TitleT6.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Tag Description ภาษาอังกฤษ ค่ะ");
		document.getElementById('title16').style.backgroundColor="#FFE1E1";
		document.getElementById('title16').focus();
		return false;
	}
	else if(TitleT6!="" || TitleT6.length!=0){document.getElementById('title16').style.backgroundColor="#FFFFFF";}
	///////////////
	
	else {  return true;}

}

function SetdataEdit(ID,NameT,NameEn,keyTH,keyEn,desTH,desEN,catImg){
	document.getElementById('set_ID1').value=ID;
	document.getElementById('title11').value=NameT;
	document.getElementById('title12').value=NameEn;
	document.getElementById('title13').value=keyTH;
	document.getElementById('title14').value=keyEn;
	document.getElementById('title15').value=desTH;
	document.getElementById('title16').value=desEN;
	document.getElementById('imgBrand').src="../img_upload/"+catImg;
		//document.getElementById('title17').value=catImg; //*/
	}
</script>
<!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
	<?php echo   strtoupper("News & promotion");?> : CATEGORY 
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->


<div align="right" style="padding-bottom:5px;">
	<div class="classButtonAdd" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม Categories</div>
</div>
<div class="resSlide">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
		<tr>
			<td width="40" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
			<td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">News Category</td>
			<td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Show</td>
			<td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Edit</td>
			<td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">Delete</td>
		</tr>
		<?php if($dataSlide[0]==0 || $dataSlide[0]==""){ ?>
		<tr>
			<td height="50" colspan="6" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี News & promotion Category ค่ะ</td>
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
						<?php if($dataSlide[$i][12]==1) { ?><a href="<?php echo $path."/"."category/function/update.php";?>?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:24px; color:#06F;"></span></a><?php } ?>
							<?php if($dataSlide[$i][12]==0) { ?><a href="<?php echo $path."/"."category/function/update.php";?>?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:24px; color:#F00;"></span></a><?php }?>
							</td>
							<td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
								<!-- <a href="<?php echo  $pathEdit;?><?=$dataSlide[$i][1];?>"  title="แก้ไขข้อมูล" > -->
								<span class="glyphicon glyphicon-edit" style="font-size:24px; color:#09F;" data-toggle="modal" data-target="#myModalEdit" onclick="return SetdataEdit('<?=$dataSlide[$i][1];?>','<?=$dataSlide[$i][2];?>','<?=$dataSlide[$i][3];?>','<?=$dataSlide[$i][4];?>','<?=$dataSlide[$i][5];?>','<?=$dataSlide[$i][6];?>','<?=$dataSlide[$i][7];?>','<?=$dataSlide[$i][8];?>');"></span>
								<!-- </a> -->
							</td>
							<td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
								
								<a href="<?php echo $path."/"."category/function/delete.php";?>?delID=<?php  echo $dataSlide[$i][1];?>&action=DelCat" target="iframePath" title="ลบข้อมูล" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:26px; color:#F00;"></span></a>
								
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


									<!-- Modal ADD CATEGORY-->
									<div class="modal fade" id="myModal" role="dialog" style="z-index:99999;">
										<div class="modal-dialog modal-lg">
											
											<!-- Modal content-->
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal">&times;</button>
													<h4 class="modal-title" style="color:#06F; font-weight:bold; font-size:25px;">ADD CATEGORY</h4>
												</div>
												<div class="modal-body" >
													<div  style="font-size:19px;">
														<div class="col-xs-12 col-sm-12 col-md-12" align="left" style=" padding:15px; font-size:19px; border:0px #999 solid; border-radius:7px;">
															<form action="<?php echo $path."/"."category/function/add.php"; ?>" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
																<input name="set_DB" type="hidden" value="<?php echo $database;?>">
																<input name="set_ID" type="hidden" value="<?php echo $data;?>">
																<input name="set_Action" type="hidden" value="AddCategory">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td width="20%" align="left" valign="middle" style="font-weight:bold;">Categories Name TH : <font style="color:#F00">*</font></td>
																		<td width="80%" align="left" valign="middle" style="padding-right:15px; padding-bottom:5px;">
																			<input type="text" name="title1" id="title1" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาไทย"></td>
																		</tr>
																		<tr>
																			<td align="left" valign="middle" style="padding-bottom:15px; font-weight:bold;">Categories Name EN : <font style="color:#F00">*</font></td>
																			<td align="left" valign="middle" style="padding-right:15px; padding-bottom:15px;"><input type="text" name="title2" id="title2" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาอังกฤษ"/></td>
																		</tr>
																		<tr>
																			<td align="left" valign="middle" style="border-top:1px #999 dotted; padding-top:15px; font-weight:bold;">Meta Tag Keywords TH: </td>
																			<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-top:1px #999 dotted; padding-top:15px;"><input type="text" name="title3" id="title3" class="textBox" placeholder="ใช้สำหรับทำ tag"/></td>
																		</tr>
																		<tr>
																			<td align="left" valign="middle" style="border-bottom:1px #999 dotted; padding-bottom:15px; font-weight:bold;">Meta Tag Keywords EN: </td>
																			<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title4" id="title4" class="textBox" placeholder="ใช้สำหรับทำ tag"/></td>
																		</tr>
																		<tr>
																			<td align="left" valign="middle" style="padding-top:15px; font-weight:bold;">Description TH :</td>
																			<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; padding-top:15px;"><input type="text" name="title5" id="title5" class="textBox"  placeholder="คำอธิบายหมวดหมู่ภาษาไทย"/></td>
																		</tr>
																		<tr>
																			<td align="left" valign="middle" style="padding-bottom:15px; border-bottom:1px #999 dotted; font-weight:bold;">Description EN :</td>
																			<td align="left" valign="middle" style="padding-right:15px;  border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title6" id="title6" class="textBox" placeholder="คำอธิบายหมวดหมู่ภาษาอังกฤษ"/></td>
																		</tr>
																		<tr>
																			<td height="20" align="left" style="padding-bottom:8px; font-weight:bold;">Image : </td>
																			<td height="20" align="left" style="padding-bottom:8px; padding-top:15px;">
																				<input type="file" name="title7" id="title7"  class="Browser_IMG" style="font-size:13px;" accept="image/x-png,image/gif,image/jpeg">
																			<font color="#FF0000">** ขนาดของรูปภาพคือ790 X 670 pixel  </font>
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
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#F00; color:#FFF;">Close</button>
															</div>
														</div>
														
													</div>
												</div>
											</div>
											<!-- Modal ADD CATEGORY-->
											
											
											
											<!-- Modal EDIT CATEGORY-->
											<div class="modal fade" id="myModalEdit" role="dialog" style="z-index:99999;">
												<div class="modal-dialog modal-lg">
													
													<!-- Modal content-->
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title" style="color:#06F; font-weight:bold; font-size:25px;">EDIT CATEGORY</h4>
														</div>
														<div class="modal-body" >
															<div  style="font-size:19px;">
																<div class="col-xs-12 col-sm-12 col-md-12" align="left" style=" padding:15px; font-size:19px; border:0px #999 solid; border-radius:7px;">
																	<form action="<?php echo $path."/"."category/function/edit.php"; ?>" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData1();">
																		<input name="set_DB1" id="set_DB1" type="hidden" value="<?php echo $database;?>">
																		<input name="set_ID1" id="set_ID1" type="hidden" value="<?php echo $data;?>">
																		<input name="set_Action1" id="set_Action1" type="hidden" value="EditCategory">
																		<table width="100%" border="0" cellspacing="0" cellpadding="0">
																			<tr>
																				<td width="20%" align="left" valign="middle" style="font-weight:bold;">Categories Name TH : <font style="color:#F00">*</font></td>
																				<td width="80%" align="left" valign="middle" style="padding-right:15px; padding-bottom:5px;">
																					<input type="text" name="title11" id="title11" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาไทย"></td>
																				</tr>
																				<tr>
																					<td align="left" valign="middle" style="padding-bottom:15px; font-weight:bold;">Categories Name EN : <font style="color:#F00">*</font></td>
																					<td align="left" valign="middle" style="padding-right:15px; padding-bottom:15px;"><input type="text" name="title12" id="title12" class="textBox" placeholder="ชื่อหมวดหมู่ภาษาอังกฤษ"/></td>
																				</tr>
																				<tr>
																					<td align="left" valign="middle" style="border-top:1px #999 dotted; padding-top:15px; font-weight:bold;">Meta Tag Keywords TH: </td>
																					<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-top:1px #999 dotted; padding-top:15px;"><input type="text" name="title13" id="title13" class="textBox" placeholder="ใช้สำหรับทำ tag"/></td>
																				</tr>
																				<tr>
																					<td align="left" valign="middle" style="border-bottom:1px #999 dotted; padding-bottom:15px; font-weight:bold;">Meta Tag Keywords EN: </td>
																					<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title14" id="title14" class="textBox" placeholder="ใช้สำหรับทำ tag"/></td>
																				</tr>
																				<tr>
																					<td align="left" valign="middle" style="padding-top:15px; font-weight:bold;">Description TH :</td>
																					<td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px; padding-top:15px;"><input type="text" name="title15" id="title15" class="textBox"  placeholder="คำอธิบายหมวดหมู่ภาษาไทย"/></td>
																				</tr>
																				<tr>
																					<td align="left" valign="middle" style="padding-bottom:15px; border-bottom:1px #999 dotted; font-weight:bold;">Description EN :</td>
																					<td align="left" valign="middle" style="padding-right:15px;  border-bottom:1px #999 dotted; padding-bottom:15px;"><input type="text" name="title16" id="title16" class="textBox" placeholder="คำอธิบายหมวดหมู่ภาษาอังกฤษ"/></td>
																				</tr>
																				<tr>
																					<td height="20" align="left" style="padding-bottom:8px; font-weight:bold;">Image : </td>
																					<td height="20" align="left" style="padding-bottom:8px; padding-top:15px;">
																						<img src="" width="120" id="imgBrand" name="imgBrand" style="border:1px #CCC solid; border-radius:4px;"/><br><br>
																						<input type="file" name="title17" id="title17"  class="Browser_IMG" style="font-size:13px;" accept="image/x-png,image/gif,image/jpeg">
																						<font color="#FF0000">** ขนาดของรูปภาพคือ790 X 670 pixel  </font>
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
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#F00; color:#FFF;">Close</button>
																	</div>
																</div>
																
															</div>
														</div>
													</div>
  <!-- Modal EDIT CATEGORY-->