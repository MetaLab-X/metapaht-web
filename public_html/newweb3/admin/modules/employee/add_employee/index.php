<?php 
	session_start();
	include "../../../libraries/config/config.php";
	include "function.php";
?>
<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<script>
	function checkData()
	{
	var allert = ["คำเตือน : รหัสพนักงาน","คำเตือน : คำนำหน้าชื่อ", "คำเตือน : ชื่อ", "คำเตือน : นามสกุล", "คำเตือน : ชื่อเล่น","คำเตือน : เบอร์โทรศัพท์","คำเตือน : ที่อยู่","คำเตือน : ตำแหน่ง","คำเตือน : ชื่อผู้ใช้งาน","คำเตือน : รหัสผ่าน"];
		<?php for($i=0;$i<=9;$i++){?>
			var data<?=$i?> = document.getElementById('txt<?=$i?>').value;
			var TrTxt<?=$i?>=Trim(data<?=$i?>);
		<?php } ?>
		
		<?php for($i=0;$i<=9;$i++){
			if($i!=6){
			?>
		if(TrTxt<?=$i?>=="" || TrTxt<?=$i?>.length==0)
		{
			alert(allert[<?=$i?>]);
			document.getElementById('txt<?=$i?>').focus();
			return false;
		}
		<?php } } ?>
	   
	   if(TrTxt9.length<6)
	   {
		   alert("คำเตือน : รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร และเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น");
		 document.getElementById("txt6").focus();
		 return false;
		}
		else { return true;}
	}
	
	function refreshPage()
	{
		document.getElementById('txt0').value="";
		document.getElementById('txt1').selectedIndex=0;
		document.getElementById('txt2').value="";
		document.getElementById('txt3').value="";
		document.getElementById('txt4').value="";
		document.getElementById('txt5').value="";
		document.getElementById('txt6').value="";
		document.getElementById('txt7').selectedIndex=0;
		document.getElementById('txt8').selectedIndex=0;
		document.getElementById('txt9').value="";
    window.parent.location.reload();
	}
</script>
<style>
	body{background-color:#fff;}
	.c {font-family: 'Kanit', sans-serif;}
</style>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
  
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px; font-size:20px;" align="center">
    <font color="#fff">เพิ่มข้อมูลพนักงาน</font>
  </div>
  <div class="row" style="padding-bottom:40px;">
       <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">รหัสพนักงาน :</font>
        <input id="txt0" name="txt0" type="text" class="form-control" placeholder="รหัสพนักงาน" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
      <div class="col-xs-2"></div>
      <div class="col-xs-2" style="padding-top:15px;">
         <font style="font-size:18px;">คำนำหน้า :</font>
        <select id="txt1" name="txt1" class="form-control" style="width:100%; height:40px;">
    	<option value="" selected="selected">คำนำหน้า</option>
		<?php 
		$preName=get_preName();
		for($i=1;$i<=$preName[0][0];$i++){
		?>
    	<option value="<?=$preName[$i][1];?>"><?=$preName[$i][2];?></option>
    	<?php }?>
  </select>
      </div>
      <div class="col-xs-2" style="padding-top:15px; padding-left:0px;">
       <font style="font-size:18px;">ชื่อ :</font>
        <input id="txt2" name="txt2" type="text" class="form-control" placeholder="ชื่อ" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2" style="padding-top:15px; padding-left:0px;">
       <font style="font-size:18px;">นามสกุล :</font>
        <input id="txt3" name="txt3" type="text" class="form-control" placeholder="นามสกุล" style="width:100%; height:40px;">
    </div>
    <div class="col-xs-2" style="padding-top:15px; padding-left:0px;">
       <font style="font-size:18px;">ชื่อเล่น :</font>
        <input id="txt4" name="txt4" type="text" class="form-control" placeholder="ชื่อเล่น" style="width:100%; height:40px;">
    </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>

     
      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">เบอร์โทรศัพท์ :</font>
        <input id="txt5" name="txt5" type="text" class="form-control" placeholder="เบอร์โทรศัพท์" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
    <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">ที่อยู่ :</font>
        <textarea id="txt6" name="txt6" rows="3" class="form-control" style="width:100%;" placeholder="ที่อยู่"></textarea>
  </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>


<div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">ตำแหน่ง :</font>
				<select  id="txt7" name="txt7" class="form-control"placeholder="ตำแหน่ง" style="width:100%; height:40px;">
          <option value="" selected="selected">ตำแหน่ง</option>
         <?php $getpo=get_positionList();
		 
		 for($i=1;$i<=$getpo[0][0];$i++){
		 ?>
          <option value="<?=$getpo[$i][1];?>"><?=$getpo[$i][2];?></option>
        <?php } ?>
        </select>
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
           <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">ชื่อผู้ใช้งาน :</font>
        <input id="txt8" name="txt8" type="text" class="form-control" placeholder="ชื่อผู้ใช้งาน" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
     
      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">รหัสผ่าน 6-8 ตัวอักษร :</font>
        <input id="txt9" name="txt9" type="text" class="form-control" placeholder="รหัสผ่าน 6-8 ตัวอักษร" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
         <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
       <font style="font-size:18px;">รูปพนักงาน :</font>
        <input id="file1" name="file1" type="file" class="form-control" placeholder="" style="width:100%; height:40px;" accept="image/x-png,image/gif,image/jpeg">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
  </div>
  <div class="col-md-12" align="center">
    <button type="submit" class="btn btn-primary" style="background-color:#364150; width:150px; height:50px;">ยืนยัน</button>
  </div>
</form>
