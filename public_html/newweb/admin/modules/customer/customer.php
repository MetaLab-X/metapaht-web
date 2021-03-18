<script type="text/javascript">
  function refreshPage(){	window.location.reload();	}
  function SearchData()
  {
	  var txtSearch=document.getElementById('searchName').value;
	  var txtSearch1=Trim(txtSearch);
	  	if(txtSearch1.length==0 || txtSearch1=="")
	  	{
		  alert("คำเตือน : กรุณาใส่ชื่อร้านค้าค่ะ");
		  document.getElementById('searchName').focus();
		}
		else
		{
			window.location.href="index.php?content=customer&Type=<?=$TypeS;?>&sort=<?=$sort?>&action=search&textsearch="+txtSearch1;
		}
	}
</script>
    <!-- TITLE -->
    <iframe id="Module_customer" name="Module_customer" src="" style="width:100%;height:400px;border:0; display:none;"></iframe>
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
    <td height="35" colspan="3" align="left" valign="middle" bgcolor="#FFFFFF" style="padding-left:10px; padding-top:15px; padding-bottom:10px;">
    <a class="btn btn-default" href="index.php?content=customer&Type=1" aria-label="Settings" style="background-color:#CCC;">
 ร้านหลัก  
</a>

<a class="btn btn-default" href="index.php?content=customer&Type=3" aria-label="Settings" style="background-color:#F90;">
  ร้านย่อยพิเศษ
</a>

<a class="btn btn-default" href="index.php?content=customer&Type=4" aria-label="Settings" style="background-color:#1DCD6C;">
  ร้านย่อยในพื้นที่ว่าง
</a>


<a class="btn btn-default" href="index.php?content=customer" aria-label="Settings" style="background-color:#88a8f8;">
  ทั้งหมด
</a> 


    </td>
    <td height="35" colspan="6" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;"> 
    
    
   <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 
    	<div class="input-group">
 		 <input class="form-control" type="text" id="searchName" name="searchName" placeholder="ชื่อร้านค้า">
    	 <span class="input-group-addon"><i class="fa fa-search" style="cursor:pointer;" onclick="return SearchData();"></i></span>
		</div>
    </td>
    <td style="padding-left:25px;">
    	<a class="fancybox fancybox.iframe btn btn-danger" href="modules/customer/add_customer/index.php" style="border:0px; background-color:#090;"> 
        	<i class="fa fa-user-plus" style="border:0px;"></i> ข้อมูล 
        </a>
    </td>
  </tr>
</table>
    
    </td>
    </tr>
  <tr style="font-weight:bold;">
    <td width="38" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
    <td width="419" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">
    <table border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="10" style="padding-right:10px;">ชื่อ </td>
    <td>
                  
</td>
  </tr>
</table>

    </td>
    <td width="558" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">ที่อยู่</td>
    <td width="265" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">เบอร์โทรศัพท์</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">สาขาย่อย</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">สิทธิการขาย</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">พื้นที่ดูแล</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">แก้ไขข้อมูล</td>
    <td width="120" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
  </tr>
  <?php if($dataCustomer[0][0]==0 || $dataCustomer[0][0]==""){ ?>
    <tr>
    <td width="38" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="419" height="50" align="center" valign="middle" bgcolor="#ffffff"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="558" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="265" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; color:#000;">&nbsp;</td>
    <td width="120" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
    </tr>
  <?php
  }
  else {
  $g=1;
  for($i=1;$i<=$dataCustomer[0][0];$i++){
	  if($dataCustomer[$i][13]=="1"){$bg="#CCC";}
	  if($dataCustomer[$i][13]=="3"){$bg="#F90";}
	  if($dataCustomer[$i][13]=="4"){$bg="#1DCD6C";}
	  
  ?>
  <tr>
    <td width="38" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
	<a id="slide" name="slide"></a>
	<?php echo $g;?></td>
    <td width="419" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px; cursor:pointer;"><?php echo $dataCustomer[$i][2];?> 
        	<?
	  		 if($dataCustomer[$i][13]=="3"){echo "(ร้านย่อยพิเศษ)";}
	  		 if($dataCustomer[$i][13]=="4"){echo "(ร้านย่อยในพื้นที่ว่าง)";}
		?>
</td>
    <td width="558" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $dataCustomer[$i][3]." ".$dataCustomer[$i][6]." ".$dataCustomer[$i][5]." ".$dataCustomer[$i][4]." ".$dataCustomer[$i][14];?></td>
    <td width="265" height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataCustomer[$i][8];?></td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
     
     <?php if($dataCustomer[$i][13]=="1"){?>
     <a class="fancybox fancybox.iframe btn " href="modules/customer/add_shop/index.php?viewId=<?=$dataCustomer[$i][1];?>" style="border:0px; ">
    <i class="fa fa-users" aria-hidden="true" style="color:#F60; font-size:24px;"></i>
    </a>
    <?php } ?>
    
    
    </td>
    <td width="120" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    <a class="fancybox fancybox.iframe btn " href="modules/customer/add_product/index.php?viewId=<?=$dataCustomer[$i][1];?>" style="border:0px;"><i class="fa fa-flag" aria-hidden="true" style="color:#060; font-size:24px;"></i></a>
    
    
    </td>
    <td width="120" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
      <a class="fancybox fancybox.iframe btn " href="modules/customer/information_customer.php?cus_ID=<?=$dataCustomer[$i][1];?>" style="border:0px;">
        <img src="assets/images/icon07.png" style="width:30px;">
        </a>
      
      
    </td>
    <td width="120" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
     <a class="fancybox fancybox.iframe btn" href="modules/customer/edit_customer/index.php?viewId=<?=$dataCustomer[$i][1];?>" style="border:0px;">
        <img src="assets/images/newicon011.png" style="width:25px;">
      </a>
    
    </td>
    <td width="120" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
   <a href="<?php echo $pathDel;?>?delID=<?php  echo $dataCustomer[$i][1];?>&shopType=Main" target="Module_customer" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
    <img src="assets/images/newicon02.png" style="width:25px;">
    </a>
    </td>
   
  </tr>
  <!----------------------------------------------------------->
   <?php
   	$childCus=customer_listSub($dataCustomer[$i][1],$sort);
	$roundS=1;
	if($childCus[0][0]!=0 || 	$childCus[0][0]!=""){
		for($point=1;$point<=$childCus[0][0];$point++){
   ?>
   <tr style="background-color:#FFF;">
    <td width="38" height="50" align="center" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid;">
	
	</td>
    <td width="419" height="50" align="left" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:80px; cursor:pointer;"><?php echo $roundS.". ".$childCus[$point][2];?></td>
    <td width="558" height="50" align="left" valign="middle"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $childCus[$point][3]." ".$childCus[$point][6]." ".$childCus[$point][5]." ".$childCus[$point][4]." ".$childCus[$point][13];?></td>
    <td width="265" height="50" align="left" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $childCus[$point][8];?></td>
    <td width="120" height="50" align="center" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    
    
    </td>
    <td width="120" height="50" align="center" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;">
    <a class="fancybox fancybox.iframe btn" href="modules/customer/add_product/index.php?viewId=<?=$childCus[$point][1];?>" style="border:0px;"><i class="fa fa-flag" aria-hidden="true" style="color:#060; font-size:24px;"></i></a>
    
    
    </td>
    <td width="120" align="center" valign="middle"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
      <a class="fancybox fancybox.iframe btn" href="modules/customer/information_customer.php?cus_ID=<?=$childCus[$point][1];?>" style="border:0px; ">
        <img src="assets/images/icon07.png" style="width:30px;">
        </a>
      
      
    </td>
    <td width="120" align="center" valign="middle"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
     <a class="fancybox fancybox.iframe btn" href="modules/customer/edit_customerSub/index.php?viewId=<?=$childCus[$point][1];?>" style="border:0px;">
        <img src="assets/images/newicon011.png" style="width:25px;">
      </a>
    
    </td>
    <td width="120" align="center" valign="middle"   style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
   <a href="<?php echo $pathDel;?>?delID=<?=$childCus[$point][1];?>&shopType=Child" target="Module_customer" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">
    <img src="assets/images/newicon02.png" style="width:25px;">
    </a>
    </td>
   
  </tr>
  <?php $roundS=$roundS+1; }  } ?>
  <!----------------------------------------------------------->
  
  
  
   <tr>
    <td colspan="9" style="display:none; border:1px #CCC solid; padding:10px 0px 10px 0px; background-color:#333;" id="<?=$dataCustomer[$i][1];?>" class="expland"> 
    
     </td>
    </tr>
  <?php $g=$g+1;} }?>
</table>
</div>
</div>
