<?php

		include "../../libraries/config/config.php";
	include "function/function.php";
	$invID=$_REQUEST['invID'];
	$dataShow=getInvDataS($invID);
	$prodList=product_detList($invID);
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<link href="../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../assets/css/style_admin.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script type="text/javascript" src="../../assets/javascript/checkword.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
$(function() {
 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 $("ul.navbar-nav li a").each(function(){
 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 $(this).addClass("active-menu");
 })
 });
function refreshPageInd(){	window.location="index.php";}

</script>

<script type="text/javascript">
  function refreshPage(){	window.location="../../<? echo $repage;?>";	}
</script>
    <!-- TITLE -->
<div class="pageModuleSpace"></div>
<!-- END TITLE-->
   <div class="pageModuleTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>

			<div class="col-xs-10">
				<font size="6">บริษัท บุญนภา 60-1 จำกัด</font>
			</div>
			<div class="col-xs-2" align="right">
				<font size="6">ใบส่งของ</font>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-8"></div>
			<div class="col-xs-4">
				<div class="col-xs-4"> เลขที่ : </div>
				<div class="col-xs-8"><?=$dataShow[2];?></div>
				<div class="col-xs-4"> วันที่ : </div>
				<div class="col-xs-8" style="padding-top:2px;"><?=$dataShow[4];?></div>
			</div>

			<div class="col-md-12" style="padding-top:50px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-3"> นามผู้ซื้อ : </div>
				<div class="col-xs-9"><?=$dataShow[13];?></div>
				<div class="col-xs-3"> ที่อยู่ : </div>
				<div class="col-xs-9"style="padding-top:2px;">
                <?php
                $address=get_addressCusTom1($dataShow[8]);
				echo $address;
				?>
        </div>
			</div>
			<div class="col-xs-5">
				<div class="col-xs-5"> เลขที่ใบสั่งซื้อ : </div>
				<div class="col-xs-7"><?=$dataShow[3];?></div>
        <div class="col-xs-12"></div>
				<div class="col-xs-5"> การชำระเงิน : </div>
				<div class="col-xs-7"style="padding-top:2px;"><?=$dataShow[5];?></div>
				<div class="col-xs-5"> กำหนดชำระ : </div>
				<div class="col-xs-7"style="padding-top:2px;"><?=$dataShow[6];?></div>
				<div class="col-xs-5"> พนักงานขาย : </div>
				<div class="col-xs-7"style="padding-top:2px;"><?=$dataShow[14];?></div>
                <div class="col-xs-5"> ตำแหน่ง : </div>
				<div class="col-xs-7"style="padding-top:2px;"><?=$dataShow[15];?></div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-3"> ปลายทาง : </div>
				<div class="col-xs-9"><?=$dataShow[9];?></div>
			</div>
			<div class="col-xs-5"></div>

	  <div class="col-md-12" style="padding-top:10px;"></div>

      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
        <tr>
          <td width="7%" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">ลำดับ</td>
          <td width="33%" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รายละเอียดสินค้า</td>
          <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">จำนวน</td>
		</tr>
        <?php if($prodList[0][0]==0 || $prodList[0][0]==""){ ?>
          <tr>
          <!--<td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี Member ค่ะ</td>-->
          <td width="7%" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
          <td width="33%" height="50" align="left" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;">&nbsp;</td>
          <td height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;">&nbsp;</td>
					</tr>
        <?php
        }
        else {
        $g=1;
        for($i=1;$i<=$prodList[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
        ?>
        <tr>
          <td width="7%" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
      	<a id="slide" name="slide"></a>
      	<?php echo $g;?></td>
          <td width="33%" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $prodList[$i][3];?></td>
          <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $prodList[$i][4];?></td>
        </tr>
        <?php $g=$g+1;} }?>
      </table>
</div>
</div>
