<?php 
	session_start();
	include "../../libraries/config/config.php";
  include "function/function.php";
	$zoneType=$_REQUEST['zoneType'];
	$zonedata=get_cusZone($zoneType);
	$employeeadd=employee_list();
	$employee=get_zoneEmployee($zoneType);
	
	$Zonename=mysql_fetch_array(mysql_query("select * from  tb_zone where zone_id='$zoneType'"));
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link rel="SHORTCUT ICON" href="../../images/admin_icon.png"/>
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
<script src="../../assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="../../assets/js/script.js"></script>


<script>
$(function() {
 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 $("ul.navbar-nav li a").each(function(){
 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 $(this).addClass("active-menu");
 })
 });
function refreshPageInd(){	window.location="index.php";}
function checkData1()
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

function checkData2()
{
	var emp=document.getElementById('text3').value;

	
	if(emp=="" || emp.length==0)
	{
		alert("คำเตือน : เลือกพนักงานผู้ดูแล");
		document.getElementById('text3').focus();
		return false;
	}
	else {return true;}
}
</script>

<script type="text/javascript">
  function refreshPage(){	window.location.reload();	}
</script>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
    <!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page)." : ".$Zonename['zone_name'];?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->
   <div class="pageModuleTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>
  <table width="100%">
    <tr>
      <td valign="top" style="padding-right:10px;"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
        <tr>
          <td height="35" colspan="4" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
          <form action="function/form_add_zone.php" method="post" enctype="multipart/form-data" name="addForm" target="addForm" onsubmit="return checkData1();">
              <input name="zoneType" id="zoneType" type="hidden" value="<?=$zoneType;?>" />
              <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><select name="text1" id="text1" class="form-control" style="width:250px;; height:40px;" onchange="data_show(this.value,'text2');">
       <option value=""> จังหวัด </option>
      <?php 
	  	$prov=get_province();
		for($i=1;$i<=$prov[0][0];$i++){
		?>
      	<option value="<?=$prov[$i][1];?>"> - <?=$prov[$i][3];?></option>
      <?php }?>
       </select></td>
    <td style="padding-left:5px;"> <select name="text2" id="text2" class="form-control" style="width:250px; height:40px;">
       <option value=""> อำเภอ / เขต </option>
       </select></td>
    <td style="padding-left:5px;"><button type="submit" class="btn btn-primary" style="border:0px; background-color:#090; width:120px; height:40px; padding:0px 10px 0px 10px;"><i class="fa fa-user-plus" style="border:0px;"></i> ข้อมูลพื้นที่การขาย </button></td>
  </tr>
</table>

              </form>
          
          </td>
        </tr>
        <tr>
          <td width="91" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
          <td width="349" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">จังหวัด</td>
          <td width="317" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">อำเภอ</td>
          <td width="92" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบพื้นที่การขาย</td>
        </tr>
        <?
        $g=1;
        for($i=1;$i<=$zonedata[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
      	  if($zonedata[$i][8]==1) {$setIMG="setOpacIMG1";}
      	  else if($zonedata[$i][8]==0) {$setIMG="setOpacIMG2";}
        ?>
        <tr>
          <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;"><a id="slide2" name="slide"></a> <?php echo $g;?></td>
          <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $zonedata[$i][3];?></td>
          <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $zonedata[$i][4];?></td>
          <td width="92" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
          <a href="function/delete_zoneInfo.php?delID=<?php  echo $zonedata[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
          <img src="../../assets/images/icon041.png" style="width:25px;" />
          </a>
          
          </td>

        <?php $g=$g+1;} ?>
      </table></td>



      <td valign="top" style="padding-left:10px;">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
        <tr>
          <td height="35" colspan="4" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
               <form action="function/form_add_employee.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData2();">
              <input name="zoneType1" id="zoneType1" type="hidden" value="<?=$zoneType;?>" />
              <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td style="padding-left:5px;"> 
    <select name="text3" id="text3" class="form-control" style="width:250px; height:40px;">
       <option value=""> พนักงาน </option>
       <?php for($i=1;$i<=$employeeadd[0][0];$i++){?>
        <option value="<?=$employeeadd[$i][1]?>"> <?=$employeeadd[$i][4]?> </option>
       <?php }?>
       </select></td>
    <td style="padding-left:5px;"><button type="submit" class="btn btn-primary" style="border:0px; background-color:#090; width:120px; height:40px;"><i class="fa fa-user-plus" style="border:0px;"></i> ข้อมูลพื้นที่การขาย </button></td>
  </tr>
</table>

              </form>
             
             
          	</td>
          </tr>
        <tr>
          <td width="82" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
          <td width="350" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ผู้ดูแล</td>
          <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ตำแหน่ง</td>
          <td width="92" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบ</td>
        </tr>
        <?php 
        $g=1;
        for($i=1;$i<=$employee[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
        ?>
        <tr>
          <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
    
      	<?php echo $g;?></td>
          <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $employee[$i][4];?></td>
           <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $employee[$i][14];?></td>
          <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
          <a id="zone_show" href="function/delete_employee.php?delID=<?php  echo $employee[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
          <img src="../../assets/images/icon041.png" style="width:25px;">
          </a>
          
          </td>
         
        </tr>
        <?php $g=$g+1;} ?>
      </table>
      </td>
    </tr>
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

