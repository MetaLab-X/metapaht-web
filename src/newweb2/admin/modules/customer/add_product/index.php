<?php 
	session_start();
	include "../../../libraries/config/config.php";
	include "function.php";
	$cusId=$_REQUEST['viewId'];
	$product_type=product_type_list($sort);
	$product_brand=product_brand_list($sort);
	
	$proDtail=product_sale($cusId);
?>
<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<script>
	function checkData()
	{
	var allert = ["", "คำเตือน : ประเภทสินค้า","คำเตือน : ยี่ห้อสินค้า"];
			var data1 = document.getElementById('text1').value;
			var TrTxt1=Trim(data1);
			
			var data2 = document.getElementById('text2').value;
			var TrTxt2=Trim(data2);
		
		if(TrTxt1=="" || TrTxt1.length==0)
		{
			alert(allert[1]);
			document.getElementById('text1').focus();
			return false;
		}
		
		if(TrTxt2=="" || TrTxt2.length==0)
		{
			alert(allert[2]);
			document.getElementById('text2').focus();
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
  <input name="cusId" id="cusId" type="hidden" value="<?=$cusId;?>" />
  <div class="col-md-12" style="background-color:#364150; padding-top:10px; padding-bottom:10px;" align="center">
    <font color="#fff" style="font-size:24px;">สิทธิการขาย</font>
  </div>
  <div class="row" style="padding-bottom:40px;">
       <div class="col-xs-1"></div>
      <div class="col-xs-4" style="padding-top:15px;">
          <select name="text1" id="text1" class="form-control" style="width:100%; height:35px;">
         <?
          for($i=1;$i<=$product_type[0][0];$i++){
         ?>
        <option value="<?=$product_type[$i][1]?>"> <?=$product_type[$i][2]?> </option>
        <?
          }
        ?>
       </select>
      </div>
      <div class="col-xs-4" style="padding-top:15px;">
         <select name="text2" id="text2" class="form-control" style="width:100%; height:40px;">
        <?
          for($i=1;$i<=$product_brand[0][0];$i++){
         ?>
        <option value="<?=$product_brand[$i][1]?>"> <?=$product_brand[$i][2]?> </option>
        <?
          }
        ?>
       </select>
</div>
       <div class="col-xs-2" style="padding-top:15px;">
         <button type="submit" class="btn btn-primary" style="background-color:#364150; width:150px; height:40px;">ยืนยัน</button>
      </div>
      <div class="col-xs-1"></div>

      <div class="col-xs-12"></div>
      
      <div class="col-xs-12" style="padding-top:15px;">
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
				<tr>
					<td height="35" colspan="4" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
						
						</td>
					</tr>
				<tr style="font-weight:bold;">
					<td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">#</td>
                    <td width="792" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ประเภทสินค้า</td>
                    <td width="772" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ยี่ห้อสินค้า</td>
				  <td width="99" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบข้อมูล</td>
				</tr>
	<?php 
			if($proDtail[0][0]!=0 || $proDtail[0][0]!=""){
			$g=1;
			for($i=1;$i<=$proDtail[0][0];$i++){
				if($g%2!="0"){$bg="#f9f9f9";}
				else if($g%2=="0"){$bg="#FFFFFF";}
				if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
			?>
				<tr>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;">
					<a id="slide" name="slide"></a>
					<?php echo $g;?></td>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;"><?=$proDtail[$i][2];?></td>
					<td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;"><?=$proDtail[$i][3];?></td>
                  <td width="99" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid;">
					<a href="delete.php?delID=<?php  echo $proDtail[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
                    <img src="../../../assets/images/icon041.png" width="28"/></a>
					</td>
				</tr>
			<?php $g=$g+1;} }?>
			</table>
</div>
       <div class="col-xs-12"></div>
      

  </div>
    

      
      
   
</form>
