<?php
	$database="tb_employee";
	$data=$_REQUEST['view'];
	if($data==""){$data="1";}
	$content=$_REQUEST["content"];
	$addAction=$_REQUEST["subpage"];

	$datapage="modules/employee";
	$path="modules/employee/";
	$pathDel="modules/employee/function/delete.php";
	$pathUpdate="modules/employee/update.php";

	$repage="index.php?content=$content";
	include $path."function/function.php";

	$dataSlide=employee_list($data, $sort);


?>
<script>
	function refreshPage(){	window.location.reload();	}
</script>
<iframe id="Modul_employee" name="Modul_employee" src="" style="width:100%;height:400px;border:0; display:none;"></iframe>
 <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">
			<!-- TITLE -->
		<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
		<?php echo   strtoupper($page);?>
		</div>

		<div class="pageModuleSpace"></div>
		<!-- END TITLE-->

		<div class="pageModuleTitle" style="font-size:19px;">

			<div style="height:10px;"></div>


			<div>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
				<tr>
					<td height="35" colspan="12" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
						<a class="fancybox fancybox.iframe btn btn-danger" href="modules/employee/add_position/index.php" style="border:0px; background-color:#090;"> <i class="fa fa-user-plus" style="border:0px;"></i> ตำแหน่งพนักงาน </a> 
                        
                        <a class="fancybox fancybox.iframe btn btn-danger" href="modules/employee/add_employee/index.php" style="border:0px; background-color:#090; margin-left:10px;"> <i class="fa fa-user-plus" style="border:0px;"></i> พนักงาน </a>
						</td>
					</tr>
				<tr style="font-weight:bold;">
					<td width="41" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
                    			
					<td width="131" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รหัสพนักงาน</td>
                    <td width="133" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ตำแหน่ง</td>
                  <td width="237" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ชื่อ</td>
					<td width="293" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ที่อยู่</td>
                    <td width="193" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เบอร์โทรศัพท์</td>
		
                    <td width="203" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ชื่อผู้ใช้งาน</td>
                    <td width="146" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รหัสผ่าน</td>
					<td width="151" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">วันที่</td>
					<td width="82" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">แก้ไขข้อมูล</td>
					<td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
				</tr>
	<?php 
			if($dataSlide[0][0]!=0 || $dataSlide[0][0]!=""){
			$g=1;
			for($i=1;$i<=$dataSlide[0][0];$i++){
				if($g%2!="0"){$bg="#f9f9f9";}
				else if($g%2=="0"){$bg="#FFFFFF";}
				if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
				else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";}
				$position=get_positionSearch($dataSlide[$i][9]);
			?>
				<tr>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
					<a id="slide" name="slide"></a>
					<?php echo $g;?></td>
                   
                    <td width="131" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][2];?></td>
                    	<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;"><?=$position[2];?></td>
                  <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $dataSlide[$i][4];?></td>
					<td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][6];?></td>
                    <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][7];?></td>
				
				
                    <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][8];?></td>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;"><?php echo $dataSlide[$i][11];?></td>
					
					<td width="151" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
					<?php echo $dataSlide[$i][12];?>
					</td>
                    	<td width="82" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-left:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
					<a class="fancybox fancybox.iframe" href="modules/employee/edit_employee/index.php?emp_id=<?=$dataSlide[$i][1];?>" style="border:0px;"> <img src="assets/images/newicon011.png" width="28"/></a>
					</td>
                    	<td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
					<a href="<?php echo $pathDel;?>?delID=<?php  echo $dataSlide[$i][1];?>" target="Modul_employee" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
                    <img src="assets/images/newicon02.png" width="28"/></a>
					</td>
				</tr>
			<?php $g=$g+1;} }?>
			</table>
			</div>
		</div>

	</div>
</div>
