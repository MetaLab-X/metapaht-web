<script type="text/javascript">
  function refreshPage(){	window.location="../../<?php echo $repage;?>";	}
</script>
<!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
  <?php echo   strtoupper($page);?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

<div class="pageModuleTitle" style="font-size:19px;">
  <div class="col-xs-12 col-sm-12 col-md-12" align="right" style="font-size:19px;">
    <a href="Admin_Panel.php?content=Customer&subpage=addSlide&setID=<?php echo $data;?>" title="เพิ่มรูปภาพไสลด์">
      <div style="border:1px #CCC solid; padding:6px; border-radius:6px; width:100px; background-color:#FF2D2D;" align="center">
        <span class="glyphicon glyphicon-plus-sign" style="font-size:14px; padding-right:5px; color:#fff"></span><font color="#fff">ADD SLIDE</font></div></a></div><br>
        <div style="height:30px;"></div>


        <div class="resSlide">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
            <tr>
              <td width="40" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
              <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Our Customer</td>
              <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Show</td>
              <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;border-right:1px #e8e8e8 solid;">Order</td>
              <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">Edit</td>
              <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">Delete</td>
            </tr>
            <?php if($dataSlide[0]==0 || $dataSlide[0]==""){ ?>
            <tr>
              <td height="50" colspan="6" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มีไสลด์ค่ะ</td>
            </tr>
            <?php
          }
          else {
            $g=1;
            for($i=1;$i<=$dataSlide[0][0];$i++){
             if($g%2!="0"){$bg="#f9f9f9";}
             else if($g%2=="0"){$bg="#FFFFFF";}
             if($dataSlide[$i][7]==1) {$setIMG="setOpacIMG1";}
             else if($dataSlide[$i][7]==0) {$setIMG="setOpacIMG2";} 
             ?>
             <tr>
              <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
               <a id="slide" name="slide"></a>
               <?php echo $g;?></td>
               <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px;"><img src="../<?php echo $dataSlide[$i][2];?>" width="150" class="<?php echo $setIMG;?>"></td>
               <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                 <?php if($dataSlide[$i][7]==1) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:24px; color:#06F;"></span></a><?php } ?>
                  <?php if($dataSlide[$i][7]==0) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:24px; color:#F00;"></span></a><?php }?>
                  </td>
                  <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                    <table width="50" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" width="25"><?php if($i!="1"){?>
                          <a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i-1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งขึ้น">
                            <span class="glyphicon glyphicon-triangle-top"  style="color:#090; font-size:18px;"></span>
                          </a>
                          <?php }?></td>
                          <td align="center" width="25"><?php if($i!=$dataSlide[0][0]){?>
                            <a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i+1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งลง">
                              <span class="glyphicon glyphicon-triangle-bottom" style="color:#090; font-size:18px;"></span>
                            </a>
                            <?php }?></td>

                          </tr>
                        </table></td>
                        <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                          <a href="<?php echo  $repage;?>&subpage=editSlide&editID=<?php  echo $dataSlide[$i][1];?>"  title="แก้ไข Slide" ><span class="glyphicon glyphicon-edit" style="font-size:24px; color:#09F;"></span></a>
                        </td>
                        <td width="60" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">

                          <a href="<?php echo $pathDel;?>?delID=<?php  echo $dataSlide[$i][1];?>" target="iframePath" title="ลบ Slide" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:26px; color:#F00;"></span></a>

                        </td>
                      </tr>
                      <?php $g=$g+1;} }?>
                    </table>
                  </div>

                  <div class="resSlide2" style="border-left:1px #CCC solid; border-right:1px #CCC solid; border-top:1px #CCC solid;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center" bgcolor="#f0f0f0" style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-top:0px; padding-bottom:0px; font-size:12px;">Slide</td>
                        <td height="50" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; font-size:12px;">Show</td>
                        <td height="50" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; font-size:12px;">Sort</td>
                        <td height="50" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; font-size:12px;">Edit</td>
                        <td height="50" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #e8e8e8 solid; font-size:12px;">Del</td>
                      </tr>
                      <?php 
                      $g=1;
                      for($i=1;$i<=$dataSlide[0][0];$i++){
                       if($g%2!="0"){$bg="#f9f9f9";}
                       else if($g%2=="0"){$bg="#FFFFFF";}
                       if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
                       else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";} 

                       ?>
                       <tr>
                        <td width="60%" style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-top:5px; padding-bottom:5px;" align="center"><img src="../<?php echo $dataSlide[$i][3];?>" width="90%" class="<?php echo $setIMG;?>"></td>
                        <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                         <?php if($dataSlide[$i][8]==1) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=true"  target="iframePath" title="ปิดการนำเสนอ"><span class="	glyphicon glyphicon-eye-open" style="font-size:15px; color:#06F;"></span></a><?php } ?>
                          <?php if($dataSlide[$i][8]==0) { ?><a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&action=setShow&setOff=false" target="iframePath" title="เปิดการนำเสนอ">  <span class="	glyphicon glyphicon-eye-close" style="font-size:15px; color:#F00;"></span></a><?php }?>
                          </td>
                          <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                            <table width="20" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center" width="25"><?php if($i!="1"){?>
                                  <a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i-1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งขึ้น">
                                    <span class="glyphicon glyphicon-triangle-top"  style="color:#090; font-size:13px;"></span>
                                  </a>
                                  <?php }?></td>
                                  <td align="center" width="25"><?php if($i!=$dataSlide[0][0]){?>
                                    <a href="<?php echo $path;?>update.php?setID=<?php  echo $dataSlide[$i][1];?>&setID2=<?php  echo $dataSlide[$i+1][1];?>&action=setpoint"  target="iframePath" title="เลื่อนตำแหน่งลง">
                                      <span class="glyphicon glyphicon-triangle-bottom" style="color:#090; font-size:13px;"></span>
                                    </a>
                                    <?php }?></td>

                                  </tr>
                                </table></td>
                                <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
                                  <a href="<?php echo  $repage;?>&subpage=editSlide&editID=<?php  echo $dataSlide[$i][1];?>"  title="แก้ไข Slide" ><span class="glyphicon glyphicon-edit" style="font-size:15px; color:#09F;"></span></a>
                                </td>
                                <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">

                                  <a href="<?php echo $pathDel;?>?=<?php  echo $dataSlide[$i][1];?>" target="iframePath" title="ลบ Slide" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"><span class="glyphicon glyphicon-remove-sign" style="font-size:15px; color:#F00;"></span></a>

                                </td>
                              </tr>
                              <?php } ?>
                            </table>

                          </div>
                        </div>