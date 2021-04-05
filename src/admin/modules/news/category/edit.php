 <?php
$editID=$_REQUEST['editID'];
$dataSlide=Get_Value_cat($editID);
?>
 <script type="text/javascript">
 function refreshPage(){	window.location="../../<? echo $repage;?>";	}
function checkData()
{
	var  Text1=document.getElementById('title1').value;
	var  Text2=document.getElementById('title2').value;
	var TitleT1=Trim(Text1);
	var TitleT2=Trim(Text2);
	
		///////////////////////////
	if(TitleT1=="" || TitleT1.length==0)
	{
		alert("คำเตือน : กรุณาใส่ชื่อประเภทสินค้า ภาษาไทย ค่ะ");
		document.getElementById('title1').style.backgroundColor="#FFE1E1";
		document.getElementById('title1').focus();
		return false;
	}
	else if(TitleT1!="" || TitleT1.length!=0){document.getElementById('title1').style.backgroundColor="#FFFFFF";}
	///////////////
	
	if(TitleT2=="" || TitleT2.length==0)
	{
		alert("คำเตือน : กรุณาใส่ชื่อประเภทสินค้า ภาษาอังกฤษ ค่ะ");
		document.getElementById('title2').style.backgroundColor="#FFE1E1";
		document.getElementById('title2').focus();
		return false;
	}
	else if(TitleT2!="" || TitleT2.length!=0){document.getElementById('title2').style.backgroundColor="#FFFFFF";}
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

 <div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">
 <a href="<?php echo $pathBack;?>" title="กลับหน้า Article Category">
 <div style="border:1px #CCC solid; padding:6px; border-radius:6px; width:100px; background-color:#FF2D2D;" align="center">
 <span class="glyphicon glyphicon-log-out" style="font-size:14px; padding-right:5px; color:#fff"></span>
 <font color="#fff">BACK</font>
 </div>
 </a>
 </div><br>
 
<div style="height:30px;"></div>
<form action="<?php echo $path;?>cat_form_article.php" method="post" enctype="multipart/form-data" name="formEditer" target="iframePath" onsubmit="return checkData();">
<input name="set_DB" type="hidden" value="<?php echo $database;?>">
<input name="slide_ID" type="hidden" value="<?php echo $dataSlide[1][1];?>">
<input name="set_Action" type="hidden" value="EditCategory">
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="14%" align="left" valign="middle">Title TH:</td>
      <td width="86%" align="left" valign="middle" style="padding-right:15px; padding-bottom:5px;">
        <input type="text" name="title1" id="title1" class="textBox" value="<?php echo $dataSlide[1][2];?>"></td>
    </tr>
    <tr>
      <td align="left" valign="middle">Title EN:</td>
      <td align="left" valign="middle" style="padding-right:15px; padding-bottom:5px;"><input type="text" name="title2" id="title2" class="textBox" value="<?php echo $dataSlide[1][3];?>"/></td>
    </tr>
    <tr>
      <td height="20" align="left" style="padding-bottom:8px;">&nbsp;</td>
      <td height="20" align="left" style="padding-bottom:8px; padding-top:15px;">
        <button type="submit" class="btn btn-default" style="background-color:#57a000; color:#FFF; width:200px; font-size:18px;"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> บันทึกข้อมูล</button></td>
    </tr>
  </table>
  </form>
  </div>