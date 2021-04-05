<?php
error_reporting(0);
// $category=$_REQUEST['category'];
include "modules/news/product/function/function.php";
$dataSlide=getProductList();
?>
<script type="text/javascript">
  function refreshPage(){	window.location="../../../../<?php echo $pathBack;?>";	}
</script>
<!-- TITLE -->
<div class="pageModuleTitle">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="left"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:18px;color:#F90"></span><?php echo $mainTitle;?></td>
      <td align="right">
      </td>
    </tr>
  </table>

</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

<div class="pageModuleTitle" style="font-size:19px;">
  <div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">

    <!--  <select name="ar_category" style="height:28px; border-radius:5px; padding-left:5px; padding-right:5px;" onchange="window.location.href=this.value;">
        <option value="<?php echo $pathBack?>">----- ประเภทสินค้า -----</option>
       <?php 
	   	//$typeList=Get_plan_Cat($productType);
		
		for($c_cat=1;$c_cat<=$typeList[0][0];$c_cat++){
	   ?>
    <option value="<?php echo $pathBack?>&category=<?php echo $typeList[$c_cat][1];?>" <?php if($category==$typeList[$c_cat][1]){echo "selected";}?>>
	   <?php echo $typeList[$c_cat][2];?>
    </option>
     
		<?php  } ?>	
        <option value="<?php echo $pathBack?>" <?php if($category==""){echo "selected";}?>>ทั้งหมด</option>
      </select>-->
      
      <a href="<?php echo $pathAdd;?>">
       <div class="classButtonAdd"> <i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่มข่าวสาร</div>
     </a>
   </div><br>
   <div style="height:20px;"></div>
   
   
   <div class="resSlide">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
      <tr>
        <td width="35" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
        <td height="35" colspan="2" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">News List</td>
        <td align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Category</td>
        <td width="123" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Show</td>
        <td width="93" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Edit</td>
        <td width="105" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">Delete</td>
      </tr>
      <?php if($dataSlide[0][0]==0 || $dataSlide[0][0]==""){ ?>
      <tr>
        <td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี News ค่ะ</td>
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
         <td width="268" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px; padding-right:10px; font-size:20px;"><img src="../<?=$dataSlide[$i][6];?>" width="200"/></td>
         <td width="761" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px; font-size:20px;"><?php  echo $dataSlide[$i][2];?>      <font style="color:#999; font-family:Verdana, Geneva, sans-serif; font-size:13px;"><br>[update : <?php echo $dataSlide[$i][8];?>]</font></td>
         <td width="368" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px; font-size:20px;">
          <?php  echo $dataSlide[$i][4];?>
        </td>
        <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
          <?php if($dataSlide[$i][3]==1) { ?><a href="<?php echo $path;?>/product/function/update_view.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="glyphicon glyphicon-eye-open" style="font-size:24px; color:#06F;"></span></a><?php } ?>
            <?php if($dataSlide[$i][3]==0) { ?><a href="<?php echo $path;?>/product/function/update_view.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:24px; color:#F00;"></span></a><?php }?>


            </td>
            
            <td width="93" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
              <a href="<?php echo  $pathEdit;?><?php  echo $dataSlide[$i][1];?>"  title="แก้ไข Article" ><span class="glyphicon glyphicon-edit" style="font-size:24px; color:#09F;"></span></a>
            </td>
            <td width="105" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">

              <a href="<?php echo $path;?>/product/function/delete.php?delID=<?php  echo $dataSlide[$i][1];?>&action=DelList" target="iframePath" title="ลบ Article" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:26px; color:#F00;"></span></a>
              
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
            <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-size:13px;">PLAN List</td>
            <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-size:13px;">Show</td>
            <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;border-right:1px #e8e8e8 solid; font-size:13px;">Pin</td>
            <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-size:13px;">Edit</td>
            <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; font-size:13px;">Del</td>
          </tr>
          <tr>
            <td width="60%" style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-top:5px; padding-bottom:5px; padding-left:10px;" align="left">
              <?php  echo $dataSlide[$i][3];?>
              <font style="color:#999; font-family:Verdana, Geneva, sans-serif; font-size:11px;">[update : <?php echo $dataSlide[$i][15].":".$dataSlide[$i][16].":".$dataSlide[$i][17];?>]</font>
            </td>
            <td width="40" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
              <?php if($dataSlide[$i][12]==1) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:15px; color:#06F;"></span></a><?php } ?>
                <?php if($dataSlide[$i][12]==0) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:15px; color:#F00;"></span></a><?php }?>
                </td>
                <td width="40" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                 <?php if($dataSlide[$i][13]==1) { ?><a href="<?php echo $path;?>list_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setPin&setOff=true"  target="iframePath" title="ปิดนำเสนอหน้าแรก"><span class="glyphicon glyphicon-pushpin" style="font-size:15px; color:#F60;"></span></a><?php } ?>
                  <?php if($dataSlide[$i][13]==0) { ?><a href="<?php echo $path;?>list_update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setPin&setOff=false" target="iframePath" title="เปิดนำเสนอหน้าแรก">  <span class="glyphicon glyphicon-pushpin" style="font-size:15px; color:#333;"></span></a><?php }?>
                  </td>
                  <td width="40" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                    <a href="<?php echo  $pathEdit;?><?php  echo $dataSlide[$i][1];?>"  title="แก้ไข Article" ><span class="glyphicon glyphicon-edit" style="font-size:15px; color:#09F;"></span></a>
                  </td>
                  <td width="40" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">

                    <a href="<?php echo $pathDel;?>?delID=<?php  echo $dataSlide[$i][1];?>" target="iframePath" title="ลบ Article" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:15px; color:#F00;"></span></a>
                    
                  </td>
                </tr>
                <?php } ?>
              </table>

            </div>

          </div>