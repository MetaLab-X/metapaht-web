<?php 
	session_start();
	include "../../libraries/config/config.php";
	include "function.php";
	$cus_id=$_REQUEST['cus_ID'];
	$zonedata=get_cusZone($cus_id);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link rel="SHORTCUT ICON" href="../../assets/images/admin_icon.png"/>
<link rel=”icon” href="../../assets/images/admin_icon.png" type=”image/x-icon”/>
<link rel="stylesheet" href="../../assets/css/style.css" />
<link rel="stylesheet" href="../../assets/css/owl.carousel.css">
<link rel="stylesheet" href="../../assets/css/owl.theme.css">
<link rel="stylesheet" href="../../assets/css/jquery.bxslider.css">
<link href="../../assets/css/bootstrap.css?v=1" rel="stylesheet" type="text/css">
<link href="../../assets/css/style_admin.css" rel="stylesheet" type="text/css">
<link href="../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<script src="../../assets/js/jquery-1.11.1.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/checkword"></script>



<script>
$(function() {
 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 $("ul.navbar-nav li a").each(function(){
 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 $(this).addClass("active-menu");
 })
 });
function refreshPageInd(){	window.location="index.php";}
function checkData()
{
	var prov=document.getElementById('text1').value;
	var amphur=document.getElementById('text2').value;
	
	if(prov=="" || prov.length==0)
	{
		alert("คำเตือน : เลือกจังหวัด");
		document.getElementById('text1').focus();
		return false;
	}
	if(amphur=="" || amphur.length==0)
	{
		alert("คำเตือน : เลือกอำเภอ");
		document.getElementById('text2').focus();
		return false;
	}
	else {return true;}
}

</script>

<script type="text/javascript">
  function refreshPage(){	window.location.reload();	}
</script>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<div class="pageModuleTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
        <tr>
          <td height="35" colspan="4" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
             <form action="form_customer_zone.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
              <input name="cus_id" id="cus_id" type="hidden" value="<?=$cus_id;?>" />
              <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><select name="text1" id="text1" class="form-control" style="width:150px;; height:40px;" onchange="data_show(this.value,'text2');">
       <option value=""> จังหวัด </option>
      <?php 
	  	$prov=get_province();
		for($i=1;$i<=$prov[0][0];$i++){
		?>
      	<option value="<?=$prov[$i][1];?>"> - <?=$prov[$i][3];?></option>
      <?php }?>
       </select></td>
    <td style="padding-left:5px;"> <select name="text2" id="text2" class="form-control" style="width:200px; height:40px;">
       <option value=""> อำเภอ / เขต </option>
       </select></td>
    <td style="padding-left:5px;"><button type="submit" class="btn btn-primary" style="background-color:#364150; width:100px; height:40px;">ยืนยัน</button></td>
  </tr>
</table>

              </form>
          	</td>
          </tr>
        <tr>
          <td width="60" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
          <td width="500" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">จังหวัด</td>
          <td width="500" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">อำเภอ</td>
          <td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบพื้นที่ดูแล</td>
        </tr>
        <?php if($zonedata[0][0]==0 || $zonedata[0][0]==""){ ?>
          <tr>
          <!--<td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี Member ค่ะ</td>-->
          <td width="60" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
          <td width="500" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
          <td width="500" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
          <td width="80" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
          </tr>
        <?php
        }
        else {
        $g=1;
        for($i=1;$i<=$zonedata[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
      	  if($zonedata[$i][8]==1) {$setIMG="setOpacIMG1";}
      	  else if($zonedata[$i][8]==0) {$setIMG="setOpacIMG2";}
        ?>
        <tr>
          <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
      	<a id="slide" name="slide"></a>
      	<?php echo $g;?></td>
          <td width="500" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $zonedata[$i][3];?></td>
          <td width="500" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $zonedata[$i][4];?></td>
          <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
         <a href="function/delete_zone.php?delID=<?php  echo $zonedata[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
          <img src="../../assets/images/icon041.png" style="width:25px;">
          </a>
          </td>
    
        </tr>
        <?php $g=$g+1;} }?>
      </table>
</div>
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
	var url = 'get_province.php?select_id='+select_id+'&result='+result;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
}
//window.onLoad=data_show(5,'amphur'); 
</script>
