<script type="text/javascript">
  function refreshPage(){	window.location.reload();	}
</script>
    <!-- TITLE -->
 <iframe id="Modul_zone" name="Modul_zone" src="" style="width:100%;height:400px;border:0; display:none;"></iframe>
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
    <td height="35" colspan="5" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
        <a class="fancybox fancybox.iframe btn btn-danger" href="modules/zone/add_zone/index.php" style="border:0px; background-color:#090;"> <i class="fa fa-user-plus" style="border:0px;"></i> พื้นที่การขาย </a>
    	</td>
    </tr>
  <tr>
    <td width="67" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
    <td width="1128" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">
    
    <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" height="5" align="right">ชื่อพื้นที่การขาย</td>
    <td height="5" style="height:10px; overflow:hidden; padding-left:5px;">
    
    <a href="index.php?content=zone&sort=First"><img src="assets/images/sort_asc.png" width="10" /></a>
    <div style="height:5px;"></div>
    
    <a href="index.php?content=zone&sort=Last"><img src="assets/images/sort_desc.png" width="10"/></a>
    
    </td>
  </tr>
</table>
          
    
    </td>
    <td width="120" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เพิ่มข้อมูลพื้นที่การขาย</td>
    <td width="117" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">แก้ไขพื้นที่การขาย</td>
    <td width="121" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบพื้นที่การขาย</td>
  </tr>
 <?
  $g=1;
  for($i=1;$i<=$Zonedata[0][0];$i++){
	  if($g%2!="0"){$bg="#f9f9f9";}
	  else if($g%2=="0"){$bg="#FFFFFF";}
	  if($Zonedata[$i][8]==1) {$setIMG="setOpacIMG1";}
	  else if($Zonedata[$i][8]==0) {$setIMG="setOpacIMG2";}
  ?>
  <tr>
    <td width="67" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
	<a id="slide" name="slide"></a>
	<?php echo $g;?></td>
    <td width="1128" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $Zonedata[$i][2];?></td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    <a class ="fancybox fancybox.iframe" href="modules/zone/information_zone.php?zoneType=<?=$Zonedata[$i][1];?>" style="border:0px; background-color:#fff;">
        <img src="assets/images/icon06.png" style="width:25px;">
      </a>
    
    </td>
    <td width="117" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
     <a class="fancybox fancybox.iframe btn btn-danger" href="modules/zone/edit_zone/index.php?viewID=<?=$Zonedata[$i][1];?>" style="border:0px; background-color:#fff;">
        <img src="assets/images/icon031.png" style="width:25px;">
      </a>
    
    </td>
    <td width="121" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;">
    <a href="<?php echo $pathDel;?>?delID=<?php  echo $Zonedata[$i][1];?>" target="Modul_zone" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
    <img src="assets/images/icon041.png" style="width:25px;">
    </a>
    
    </td>

  
  </tr>
  <?php $g=$g+1; }?>
</table>
</div>
</div>
