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
	  var data0 = document.getElementById('txt0').value;
    var data1 = document.getElementById('txt1').value;
    var data2 = document.getElementById('txt2').value;
    var data3 = document.getElementById('txt3').value;

		var TrTxt0=Trim(data0);
    var TrTxt1=Trim(data1);
    var TrTxt2=Trim(data2);
    var TrTxt3=Trim(data3);

	  if(TrTxt0 == "")
	  {
		    alert("คำเตือน : กรุณาเลือกประเภท");
        document.getElementById("txt0").focus();
        return false;
		}
    if(TrTxt1  == "")
	  {
		    alert("คำเตือน : กรุณากรอกชื่อผู้ดูแล");
        document.getElementById("txt1").focus();
        return false;
		}
    if(TrTxt2 == "")
	  {
		    alert("คำเตือน : กรุณากรอก Username");
        document.getElementById("txt2").focus();
        return false;
		}
    if(TrTxt3 == "")
	  {
		    alert("คำเตือน : รหัสผ่านต้องมีอย่างน้อย 6 ตัวอักษร และเป็นภาษาอังกฤษหรือตัวเลขเท่านั้น");
        document.getElementById("txt3").focus();
        return false;
		}
		else { return true;}
	}
	
	function refreshPage()
	{
		//document.getElementById('txt0').selectedIndex="";
		//document.getElementById('txt1').value="";
		//document.getElementById('txt2').value="";
		//document.getElementById('txt3').value="";
    window.parent.location.reload();
	}
</script>
<style>
	body{background-color:#fff;}
	.c {font-family: 'Kanit', sans-serif;}
</style>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
  
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center">
    <font color="#fff">เพิ่มข้อมูลผู้ดูแล</font>
  </div>
  <div class="row" style="padding-bottom:40px;">
      <div width="20%" >ประเภทผู้ดูแล</div>
      <div width="80%" style="padding-top:15px;">
                <select id="txt0" name="txt0" class="form-control" style="width:100%; height:40px;">
          <option value="">สถานะ</option>
          <option value="admin">admin</option>
          <option value="user">user</option>
        </select>
      </div>

      <div width="20%" >ชื่อผู้ดูแล :</div>
      <div width="80%" style="padding-top:15px;">
        <input id="txt1" name="txt1" type="text" class="form-control" placeholder="ชื่อผู้ดูแล" style="width:100%; height:40px;">
      </div>

      <div class="col-xs-12"></div>
      <div width="20%">Username : </div>
        <div width="80%" style="padding-top:15px;">
          <input id="txt2" name="txt2" type="text" class="form-control" placeholder="ชื่อผู้ดูแล" style="width:100%; height:40px;">
        </div>

      <div class="col-xs-12"></div>
      <div width="20%">Password : </div>
        <div width="80%" style="padding-top:15px;">
          <input id="txt3" name="txt3" type="text" class="form-control" placeholder="รหัสผ่าน 6-8 ตัวอักษร" style="width:100%; height:40px;">
        </div>

      <div class="col-xs-12"></div>
  </div>
  <div class="col-md-12" align="center">
    <button type="submit" class="btn btn-primary" style="background-color:#364150; width:150px; height:50px;">ยืนยัน</button>
  </div>
</form>
