<script type="text/javascript">
  function refreshPage(){	window.location="../../../<? echo $repage;?>";	}
</script>

<iframe id="Modul_product" name="Modul_product" src="" style="width:100%;height:400px;border:0; display:none;"></iframe>
    <!-- TITLE -->
<div class="pageModuleTitle">
<span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span> <?php echo strtoupper($page);?>
</div>
<div class="pagemodulesSpace"></div>
<!-- END TITLE-->

   <div class="pagemodulesTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>
  	  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  	    <tr>
  	      <td height="35" colspan="7" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
						<a class="fancybox fancybox.iframe btn btn-danger" href="modules/product/type/index.php" style="border:0px; background-color:#090;"> <i class="fa fa-user-plus" style="border:0px;"></i> ประเภทสินค้า </a> 
						<a class="fancybox fancybox.iframe btn btn-danger" href="modules/product/brand/index.php" style="border:0px; background-color:#090;"> <i class="fa fa-user-plus" style="border:0px;"></i> ยี่ห้อสินค้า </a> 
						<a class="fancybox fancybox.iframe btn btn-danger" href="modules/product/add/index.php" style="border:0px; background-color:#090;"> <i class="fa fa-user-plus" style="border:0px;"></i> สินค้า </a></td>
        </tr>
  	    <tr>
  	      <td width="58" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
  	      <td colspan="2" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">
          
          <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5">ชื่อ</td>
    <td height="5" style="height:10px; overflow:hidden; padding-left:5px;">
    
    <a href="index.php?content=product&type=name&sort=First"><img src="assets/images/sort_asc.png" width="10" /></a>
    <div style="height:5px;"></div>
    
    <a href="index.php?content=product&type=name&sort=Last"><img src="assets/images/sort_desc.png" width="10"/></a>
    
    </td>
  </tr>
</table>
          
          
          </td>
					<td width="256" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;"> <span>
		<table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5">ยี่ห้อ</td>
    <td height="5" style="height:10px; overflow:hidden; padding-left:5px;">
    
     <a href="index.php?content=product&type=brand&sort=First"><img src="assets/images/sort_asc.png" width="10" /></a>
    <div style="height:5px;"></div>
    
    <a href="index.php?content=product&type=brand&sort=Last"><img src="assets/images/sort_desc.png" width="10"/></a>
    
    </td>
  </tr>
</table>
                    
                   
                    
          </span></td>
  	      <td width="256" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">
          <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="5">ประเภท</td>
    <td height="5" style="height:10px; overflow:hidden; padding-left:5px;">
    
  <a href="index.php?content=product&type=type&sort=First"><img src="assets/images/sort_asc.png" width="10" /></a>
    <div style="height:5px;"></div>
    
    <a href="index.php?content=product&type=type&sort=Last"><img src="assets/images/sort_desc.png" width="10"/></a>
    
    </td>
  </tr>
</table>
          
          
          </td>
  	      <td width="167" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">แก้ไขข้อมูลสินค้า</td>
  	      <td width="170" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูลสินค้า</td>
        </tr>
  <?
  $g=1;
  for($i=1;$i<=$product[0][0];$i++){
	  if($g%2!="0"){$bg="#f9f9f9";}
	  else if($g%2=="0"){$bg="#FFFFFF";}
	  if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
	  else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";}
  ?>
  	    <tr>
  	      <td width="58" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;"><a id="slide" name="slide"></a> <?php echo $g;?></td>
  	      <td width="290" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><img src="<?php echo $product[$i][5];?>" style="height:120px;" /> </td>
					<td width="829" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $product[$i][3];?></td>
  	      <td width="256" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $product[$i][4];?></td>
  	      <td width="256" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $product[$i][2];?></td>
  	      <td width="167" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
          <a class="fancybox fancybox.iframe btn btn-danger" href="modules/product/edit/index.php?viewId=<?=$product[$i][1];?>" style="border:0px; background-color:#fff;"> <img src="assets/images/icon031.png" style="width:25px;" /> </a>
          
          </td>
  	      <td width="170" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
         <a href="<?php echo $pathDel;?>?delID=<?php  echo $product[$i][1];?>" target="Modul_product" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
          <img src="assets/images/icon041.png" style="width:25px;" />
          </a>
          </td>

        </tr>
  	    <?php $g=$g+1;} ?>
      </table>
  	</div>
</div>
