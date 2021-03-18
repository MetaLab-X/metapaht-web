<?php 
	session_start();
	include "../../../libraries/config/config.php";
	include "function.php";
	$pst=get_positionList();
?>
<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<script>
	function checkData()
	{
		var data1 = document.getElementById('txt1').value;
		var TrTxt1=Trim(data1);
		
		if(TrTxt1=="" || TrTxt1.length==0)
		{
			alert("คำเตือน : กรุณากรอกชื่อยี่ห้อสินค้า");
			document.getElementById('txt1').focus();
			return false;
		}
	  
		else { return true;}
	}
	
	function refreshPage()
	{
		location.reload();
	}
</script>
<style>
	body{background-color:#fff;}
	.c {font-family: 'Kanit', sans-serif;}
</style>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
  
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center">
    <font color="#fff">จัดการข้อมูลยี่ห้อสินค้า</font>
  </div>
  <div class="row" style="padding-bottom:40px;">
       <div class="col-xs-2" style="padding-top:25px;">ชื่อยี่ห้อสินค้า</div>
      <div class="col-xs-8" style="padding-top:15px;">
        <input id="txt1" name="txt1" type="text" class="form-control" placeholder="ชื่อยี่ห้อสินค้า" style="width:100%; height:40px;">
      </div>
       <div class="col-xs-2" style="padding-top:15px;">
         <button type="submit" class="btn btn-primary" style="background-color:#364150; width:100px; height:40px;">ยืนยัน</button>
      </div>
      <div class="col-xs-1"></div>

      <div class="col-xs-12"></div>
      
      <div class="col-xs-1"></div>
      <div class="col-xs-10" style="padding-top:15px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
				<tr>
					<td height="35" colspan="3" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
						
						</td>
					</tr>
				<tr style="font-weight:bold;">
					<td width="41" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
                    <td height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ยี่ห้อสินค้า</td>
				  <td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
				</tr>
	<?php 
			if($pst[0][0]!=0 || $pst[0][0]!=""){
			$g=1;
			for($i=1;$i<=$pst[0][0];$i++){
				if($g%2!="0"){$bg="#f9f9f9";}
				else if($g%2=="0"){$bg="#FFFFFF";}
				if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
			?>
				<tr>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
					<a id="slide" name="slide"></a>
					<?php echo $g;?></td>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;"><?=$pst[$i][2];?></td>
                  <td width="80" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
					<a href="delete.php?delID=<?php  echo $pst[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
                    <img src="../../../assets/images/newicon02.png" width="28"/></a>
					</td>
				</tr>
			<?php $g=$g+1;} }?>
			</table>
</div>
      <div class="col-xs-1" style="padding-top:15px; padding-left:0px;">
        
      </div>
       <div class="col-xs-12"></div>
      

  </div>
    

      
      
   
</form>
