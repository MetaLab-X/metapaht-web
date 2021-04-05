<?php
	session_start();
	include "../../libraries/config/config.php";
	include "function.php";
	$cusID=$_POST['id'];
	$mainShop=customer_detail($cusID);
?>
<div style="width:100%; padding:15px;">

<div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" style="color:#FFF;">ชื่อลูกค้า : <font style="font-size:22px;"><?=$mainShop[1][2];?></font></td>
    <td align="right"><a class="btn btn-default btn-sm fancybox fancybox.iframe" href="modules/invoice/add_shop/" style="background-color:#060; color:#FFF; font-size:18px; border:0px;"><i class="fa fa-plus-circle"></i> เพิ่มร้านย่อย</a></td>
  </tr>
</table>
</div>

<div style="padding-top:20px; padding-bottom:20px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr style="font-weight:bold;">
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;"><table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="10" style="padding-right:10px;">ชื่อ </td>
        <td></td>
      </tr>
    </table></td>
    <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ที่อยู่</td>
    <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เบอร์โทรศัพท์</td>
    <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">สิทธิการขาย</td>
    <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">แก้ไขข้อมูล</td>
    <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
  </tr>
  <tr style="font-weight:bold;">
    <td height="35" align="center" valign="middle" bgcolor="#FFFFFF" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">&nbsp;</td>
    <td height="35" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">&nbsp;</td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">&nbsp;</td>
    <td align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">&nbsp;</td>
    <td width="180" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">&nbsp;</td>
    <td width="180" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">&nbsp;</td>
    <td width="180" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #9b9b9b solid;">&nbsp;</td>
  </tr>
</table>
</div>
	
</div>