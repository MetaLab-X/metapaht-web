<?php 
	session_start();
	include "../../../libraries/config/config.php";
	include "function.php";
	$proID=$_REQUEST['viewId'];
	$pro_data=get_productValue($proID);
  $product_type = product_type_list("");
  $product_brand = product_brand_list("");
?>

<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<script>
	function checkData()
	{
	var allert = ["", "คำเตือน : ชื่อสินค้า","คำเตือน : ประเภทสินค้า","คำเตือน : ยี่ห้อสินค้า","คำเตือน : รูปสินค้า"];
		<?php for($i=1;$i<=3;$i++){?>
			var data<?=$i?> = document.getElementById('text<?=$i?>').value;
			var TrTxt<?=$i?>=Trim(data<?=$i?>);
		<?php } ?>
		
		<?php for($i=1;$i<=3;$i++){?>
		if(TrTxt<?=$i?>=="" || TrTxt<?=$i?>.length==0)
		{
			alert(allert[<?=$i?>]);
			document.getElementById('text<?=$i?>').focus();
			return false;
		}
		<?php } ?>
		else { return true;}
	}
	
	function refreshPage()
	{
		document.getElementById('text1').value="";
		document.getElementById('text2').selectedIndex=0;
    document.getElementById('text3').value="";
		document.getElementById('text4').value="";
    window.parent.location.reload();
	}
</script>
<style>
	.c {
	  font-family: 'Kanit', sans-serif;}
</style>

<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
<input name="proID" id="proID" type="hidden" value="<?=$pro_data[1];?>" />
<body style="background-color:#F9F9F9;">
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center">
    <font color="#fff">แก้ไขข้อมูลสินค้า</font>
  </div>
  <div class="row" style="padding-bottom:40px;">
      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
        <input type="text" name="text1" id="text1" class="form-control" placeholder="ชื่อ" style="width:100%; height:40px;" value="<?=$pro_data[3];?>">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
       <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
         <select name="text2" id="text2" class="form-control" style="width:100%; height:40px;">
         <?
          for($i=1;$i<=$product_type[0][0];$i++){
         ?>
        <option value="<?=$product_type[$i][1]?>" <?php if($pro_data[2]==$product_type[$i][1]){echo "selected";}?> > <?=$product_type[$i][2]?> </option>
        <?
          }
        ?>
       </select>
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
    <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
        <select name="text3" id="text3" class="form-control" style="width:100%; height:40px;">
            <?
              for($i=1;$i<=$product_brand[0][0];$i++){
            ?>
            <option value="<?=$product_brand[$i][1]?>" <?php if($pro_data[7]==$product_brand[$i][1]){echo "selected";}?> > <?=$product_brand[$i][2]?> </option>
            <?
              }
            ?>
        </select>
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
    <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
        <input type="file" id="text4" name="text4" class="form-control" placeholder="ไม่พบไฟล์" style="width:100%; height:40px;" accept="image/x-png,image/gif,image/jpeg">
      </div>
      <div class="col-xs-2"></div>
  </div>
  <div class="col-md-12" align="center">
    <button type="submit" class="btn btn-primary" style="background-color:#364150; width:150px; height:50px;">ยืนยัน</button>
  </div>
</body>
</form>
