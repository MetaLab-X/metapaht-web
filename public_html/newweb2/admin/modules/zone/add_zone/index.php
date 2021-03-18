<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<style>
	.c {
	  font-family: 'Kanit', sans-serif;}
</style>
<script type="text/javascript">
 function checkData()
 {
	 var zone=document.getElementById('zone').value;
	 var Tzone=Trim(zone);
	if(Tzone.length==0 || Tzone=="")
	{
		alert("คำเตือน : Zone มีค่าว่าง");
		document.getElementById('zone').focus();
		return false;
	}
	else { return true;}
	}
	function refreshPage(){window.parent.location.reload();}
</script>
<body style="background-color:#F9F9F9;">
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center">
    <font color="#fff">เพิ่มพื้นที่การขาย</font>
  </div>
	<div class="col-xs-12" align="center" style="color:#364150;">
		<i class="fa fa-map-marker" aria-hidden="true"  style="padding:10px; font-size:50px;"></i>
	</div>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onSubmit="return checkData();">
	<div class="col-xs-2"></div>
  <div class="col-xs-8" style="padding-top:10px;">
    <input type="text" name="zone" id="zone" class="form-control" placeholder="พื้นที่การขาย">
  </div>
  <div class="col-xs-2"></div>

  <div class="col-xs-12"></div>

  <div class="col-xs-12" align="center" style="padding-top:20px;">
    <button type="submit"  class="btn btn-primary" style="background-color:#364150; width:150px; height:50px;">ยืนยัน</button>
  </div>
  </form>
</body>
