<script type="text/javascript">
  function refreshPage(){	window.location="../../../<? echo $repage;?>";	}
</script>
    <!-- TITLE -->
    <iframe id="Modul_invoice" name="Modul_invoice" src="" style="width:100%;height:400px;border:0; display:none;"></iframe>
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page);?>
</div>
<div class="pagemodulesSpace"></div>
<!-- END TITLE-->

   <div class="pagemodulesTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  <tr>
    <td height="35" colspan="9" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
      <a class="btn btn-danger" href="index.php?content=invoice&subpage=Add_Invoice" style="border:0px; background-color:#090;">
        <div <?php if($page=="Add_Invoice"){echo "class='MENU'";}?> >
          <i class="fa fa-user-plus" style="border:0px;"></i> ใบชำระเงิน 
        </div>
      </a>
    </td>
  </tr>
  <tr>
    <td width="59" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
    <td width="404" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ชื่อ</td>
    <td width="300" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เลขที่ใบส่งของ </td>
    <td width="301" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">กำหนดชำระ</td>
    <td width="300" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">วันที่</td>
    <td width="140" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">แสดงใบชำระเงิน</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เพิ่มรายการสินค้า</td>
    <td width="120" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;  border-right:1px #e8e8e8 solid;">แก้ไขข้อมูล</td>
    <td width="120" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
  </tr>
  <?php if($invoiceData[0][0]==0 || $invoiceData[0][0]==""){ ?>
    <tr>
    <!--<td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี Member ค่ะ</td>-->
    <td width="59" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td height="50" colspan="3" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="300" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="140" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
    </tr>
  <?php
  }
  else {
  $g=1;
  for($i=1;$i<=$invoiceData[0][0];$i++){
	  if($g%2!="0"){$bg="#f9f9f9";}
	  else if($g%2=="0"){$bg="#FFFFFF";}
  ?>
  <tr>
    <td width="59" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
	<a id="slide" name="slide"></a>
	<?php echo $g;?></td>
    <td width="404" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:20px;"><?php echo $invoiceData[$i][2];?></td>
    <td width="300" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:20px;"><?php echo $invoiceData[$i][7];?></td>
    <td width="301" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $invoiceData[$i][4];?></td>
    <td width="300" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $invoiceData[$i][5];?></td>
    <td width="140" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    <a class="fancybox fancybox.iframe btn btn-danger" href="modules/invoice/show_invoice.php?invID=<?=$invoiceData[$i][1];?>" style="border:0px; background-color:#fff;">
        <img src="assets/images/icon05.png" style="width:28px;">
      </a>
      
      </td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    <?php if($invoiceData[$i][6]==0){?>
      <a class="fancybox fancybox.iframe btn btn-danger" href="modules/invoice/add_detail/index.php?invID=<?=$invoiceData[$i][1];?>" style="border:0px; background-color:#fff;">
    <img src="assets/images/icon061.png" style="width:25px;">
    </a>
    <?php } else if($invoiceData[$i][6]!=0){?>
	  <a class="fancybox fancybox.iframe btn btn-danger" href="modules/invoice/add_detail/index.php?invID=<?=$invoiceData[$i][1];?>" style="border:0px; background-color:#fff;">
    <img src="assets/images/icon062.png" style="width:25px;">
    </a>
    <?php } ?>
    </td>
    <td width="120" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;">
    <a href="index.php?content=invoice&subpage=Edit_Invoice&view=<?=$invoiceData[$i][1];?>" style="border:0px; background-color:#fff;">
        
          <img src="assets/images/icon031.png" style="width:25px;">

        </a>
    
    </td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
     <a href="<?php echo $pathDel;?>?delID=<?php  echo $invoiceData[$i][1];?>" target="Modul_invoice" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
    <img src="assets/images/icon041.png" style="width:25px;">
    </a>
    </td>
  </tr>
  <?php $g=$g+1;} }?>
</table>
</div>
</div>
