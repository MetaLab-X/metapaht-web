 <?php
 $editID=$_REQUEST['editID'];
 include "modules/news/product/function/function.php";
//$dataSlide=Get_Value_cat($editID);
 ?>
 <script type="text/javascript">
 	function refreshPage(){	window.location="../../../../<?php echo $pathBack;?>";	}
 	function message1Focus(){CKEDITOR.instances.message.focus();}
 	function message2Focus(){CKEDITOR.instances.message2.focus();}
 	function checkData()
 	{
 		var  cat1=document.getElementById('ar_category1').value;
 		var  Text1=document.getElementById('title1').value;
 		var  Text2=document.getElementById('title2').value;
 		var  Text3=document.getElementById('title3').value;
 		var  Text4=document.getElementById('title4').value;
 		var  Text5=document.getElementById('title5').value;
 		var  Text6=document.getElementById('title6').value;
 		var  Text8=document.getElementById('file1').value;
 		
 		var TitleT1=Trim(Text1);
 		var TitleT2=Trim(Text2);
 		var TitleT3=Trim(Text3);
 		var TitleT4=Trim(Text4);
 		var TitleT5=Trim(Text5);
 		var TitleT6=Trim(Text6);
 		
 		if(cat1=="" || cat1.length==0){
 			alert("คำเตือน : กรุณณาเลือกประเภทข่าว ค่ะ");
 			document.getElementById('ar_category1').focus();
 			return false;
 		}
		///////////////////////////
		if(TitleT1=="" || TitleT1.length==0)
		{
			alert("คำเตือน : กรุณณาใส่ชื่อข่าว TH ค่ะ");
			document.getElementById('title1').style.backgroundColor="#FFE1E1";
			document.getElementById('title1').focus();
			return false;
		}
		else if(TitleT1!="" || TitleT1.length!=0){document.getElementById('title1').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT2=="" || TitleT2.length==0)
	{
		alert("คำเตือน : กรุณณาใส่ชื่อข่าว EN ค่ะ");
		document.getElementById('title2').style.backgroundColor="#FFE1E1";
		document.getElementById('title2').focus();
		return false;
	}
	else if(TitleT2!="" || TitleT2.length!=0){document.getElementById('title2').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT3=="" || TitleT3.length==0)
	{
		alert("คำเตือน : กรุณาใส่ keyword  TH ค่ะ");
		document.getElementById('title3').style.backgroundColor="#FFE1E1";
		document.getElementById('title3').focus();
		return false;
	}
	else if(TitleT3!="" || TitleT3.length!=0){document.getElementById('title3').style.backgroundColor="#FFFFFF";}
	///////////////
	if(TitleT4=="" || TitleT4.length==0)
	{
		alert("คำเตือน : กรุณาใส่ keyword  EN ค่ะ");
		document.getElementById('title4').style.backgroundColor="#FFE1E1";
		document.getElementById('title4').focus();
		return false;
	}
	else if(TitleT4!="" || TitleT4.length!=0){document.getElementById('title4').style.backgroundColor="#FFFFFF";}
	///////////////
	
	
	if(TitleT5=="" || TitleT5.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Description TH ค่ะ");
		document.getElementById('title5').style.backgroundColor="#FFE1E1";
		document.getElementById('title5').focus();
		return false;
	}
	else if(TitleT5!="" || TitleT5.length!=0){document.getElementById('title5').style.backgroundColor="#FFFFFF";}
	///////////////
	if(TitleT6=="" || TitleT6.length==0)
	{
		alert("คำเตือน : กรุณาใส่ Description EN ค่ะ");
		document.getElementById('title6').style.backgroundColor="#FFE1E1";
		document.getElementById('title6').focus();
		return false;
	}
	else if(TitleT6!="" || TitleT6.length!=0){document.getElementById('title6').style.backgroundColor="#FFFFFF";}
	///////////////
	
	
	if(Text8=="" || Text8.length==0)
	{
		alert("คำเตือน : กรุณาเลือกรูปภาพตัวอย่างค่ะ");
		document.getElementById('file1').style.backgroundColor="#FFE1E1";
		document.getElementById('file1').focus();
		return false;
	}
	else if(TitleT8!="" || TitleT8.length!=0){document.getElementById('file1').style.backgroundColor="#FFFFFF";}
	
	else {  return true;}

}
</script>
<!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
	<?php echo  $mainTitle;?> : ADD 
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

<div class="pageModuleTitle" style="font-size:19px;">

	<div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">
		<a href="<?php echo $pathBack;?>" title="กลับหน้า News & Promotion">
			<div style="border:1px #CCC solid; padding:6px; border-radius:6px; width:100px; background-color:#FF2D2D; display:inline-block;" align="center">
				<span class="glyphicon glyphicon-log-out" style="font-size:14px; padding-right:5px; color:#fff"></span>
				<font color="#fff">BACK</font>
			</div>
		</a>
	</div><br>
	
	<div style="height:30px;"></div>
	<form action="<?=$path;?>/product/function/add.php" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
		<input name="set_DB" type="hidden" value="<?php echo $database;?>">
		<input name="set_DBType" type="hidden" value="<?php echo $productType;?>">
		<input name="set_Action" type="hidden" value="addArticle">
		<div class="container" style="padding-left:0px; padding-right:0px;">
			<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Category :</div>
			<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
				<select name="ar_category1" id="ar_category1" style="height:35px; border-radius:5px; padding-left:5px; padding-right:5px; max-width:100%; width:320px;" onchange="data_show(this.value,'ar_category2');">
					<option value="">-- เลือกข่าว --</option>
					<?php 
					$typeList=Get_category_List($productType);
					
					for($c_cat=1;$c_cat<=$typeList[0][0];$c_cat++){
						?>
						<option value="<?php echo $typeList[$c_cat][1];?>"><?php echo $typeList[$c_cat][2];?></option>
						
						<?php  } ?>	
					</select>
				</div>
			</div>
			
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Title TH :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;"><input type="text" name="title1" id="title1" class="textBox" value=""></div>
			</div>
			
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Title EN :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;"><input type="text" name="title2" id="title2" class="textBox" value=""></div>
			</div>
			
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Keyword TH :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;"><input type="text" name="title3" id="title3" class="textBox" value=""></div>
			</div>
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Keyword EN :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;"><input type="text" name="title4" id="title4" class="textBox" value=""></div>
			</div>
			
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Description TH :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
					<textarea name="title5" class="textBox" id="title5" style="min-height:100px; max-height:100px;"></textarea>
				</div>
			</div>
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Description EN :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
					<textarea name="title6" class="textBox" id="title6" style="min-height:100px; max-height:100px;"></textarea>
				</div>
			</div>
			
			
			<div class="container" style="padding-top:15px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-top:5px; padding-left:0px; padding-right:0px;">Detail TH :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-top:5px; padding-left:0px; padding-right:0px;">
					<textarea name="message" cols="100" rows="30" id="message"  style="width:100%;"> </textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace( 'message', { 
							height   : 550,
							toolbar :[  ['Source'],
							['Bold','Italic','Underline'],
							['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
							['Link','Unlink'],
							['Image','Table','HorizontalRule','Smiley'],
							['TextColor','BGColor'],['Font','FontSize']],
							filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
							filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
							filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
							filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
							filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
						});
						CKFinder.setupCKEditor( editor, '../' );
					</script>
				</div>
				
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-top:8px; padding-left:0px; padding-right:0px;">Detail EN :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-top:8px; padding-left:0px; padding-right:0px;">
					<textarea name="message2" cols="100" rows="30" id="message2"  style="width:100%;"> </textarea>
					<script type="text/javascript">
						var editor = CKEDITOR.replace( 'message2', { 
							height   : 550,
							toolbar :[  ['Source'],
							['Bold','Italic','Underline'],
							['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
							['Link','Unlink'],
							['Image','Table','HorizontalRule','Smiley'],
							['TextColor','BGColor'],['Font','FontSize']],
							filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
							filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
							filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
							filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
							filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
							filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
						});
						CKFinder.setupCKEditor( editor, '../' );
					</script>
				</div> 
			</div>
			
			<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
				<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">Image :</div>
				<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-left:0px; padding-right:0px;">
					<input type="file" name="file1" id="file1"  class="Browser_IMG" style="font-size:13px;">
					<font color="#FF0000">** ขนาดของรูปภาพคือ 790 X 670 pixcel และเป็น .jpg หรือ .jpeg </font>
					</div>
				</div>
				
				
				
				<div class="container" style="padding-top:20px; padding-left:0px; padding-right:0px;">
					<div class="col-xs-12 col-sm-2 col-md-2" align="left" style="font-size:19px; padding-top:5px;padding-left:0px; padding-right:0px;"></div>
					<div class="col-xs-12 col-sm-10 col-md-10" align="left" style="font-size:19px; padding-top:5px; padding-left:0px; padding-right:0px;">
						<button type="submit" class="btn btn-default" style="background-color:#57a000; color:#FFF; width:200px; font-size:18px;"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> บันทึกข้อมูล</button>
					</div>
				</div>
			</form>
		</div>
		
		
		<script language="javascript">
// Start XmlHttp Object
function uzXmlHttp(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlhttp = false;
		}
	}
	
	if(!xmlhttp && document.createElement){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
// End XmlHttp Object

function data_show(select_id,result){
	var url = 'Module/product/product/get_brand.php?select_id='+select_id+'&result='+result;
	//alert(url);
	
	xmlhttp = uzXmlHttp();
	xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
	xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
	
	//alert(xmlhttp.responseText);
}
//window.onLoad=data_show(5,'amphur'); 
</script>
