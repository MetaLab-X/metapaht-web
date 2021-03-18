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
	var allert = ["คำเตือน : ประเภทร้าน", "คำเตือน : ชื่อ - นามสกุล","คำเตือน : ที่อยู่","คำเตือน : จังหวัด","คำเตือน : อำเภอ","คำเตือน : ตำบล","คำเตือน : อีเมล์","คำเตือน : เบอร์โทรศัพท์","คำเตือน : แฟ็กซ์","คำเตือน : เลขประจำตัวผู้เสียภาษี","คำเตือน : ประเภทร้าน","คำเตือน : สิทธิการขาย","คำเตือน : ชื่อผู้ติดต่อ","คำเตือน : เบอร์ผู้ติดต่อ"];
		<?php for($i=0;$i<=13;$i++){?>
			var data<?=$i?> = document.getElementById('text<?=$i?>').value;
			var TrTxt<?=$i?>=Trim(data<?=$i?>);
		<?php } ?>
		
		<?php for($i=0;$i<=13;$i++){
			if($i!=5 && $i!=6 && $i!=8 && $i!=9 && $i!=10 && $i!=11 && $i!=12 && $i!=13){
			?>
		if(TrTxt<?=$i?>=="" || TrTxt<?=$i?>.length==0)
		{
			alert(allert[<?=$i?>]);
			document.getElementById('text<?=$i?>').focus();
			return false;
		}
		<?php }  } ?>
	   
	    return true;
	}
	
	function refreshPage(){window.parent.location.reload();}
</script>
<style>
		body {
	background-color:#fff;
}
	.c {
	  font-family: 'Kanit', sans-serif;}
</style>


<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
<div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center"> <font color="#fff">เพิ่มข้อมูลลูกค้า</font> </div>
<div class="row" style="padding-bottom:40px;">

<div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">ประเภทร้านค้า :</font>
          <select name="text0" id="text0" class="form-control" style="width:100%; height:40px;">
           <option value="1"> ร้านหลัก </option>
           <option value="3"> ร้านย่อยพิเศษ </option>
           <option value="4"> ร้านย่อยในพื้นที่ว่าง </option>
          </select>
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>
      
      
<div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">ชื่อ :</font>
        <input name="text1" id="text1" class="form-control" placeholder="ชื่อ" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>

      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">ที่อยู่ :</font>
<textarea  name="text2" id="text2" class="form-control" style="width:100%; height:100px;" placeholder="ที่อยู่"></textarea>

</div>
      <div class="col-xs-2"></div>

      <div class="col-xs-12"></div>

      <div class="col-xs-2"></div>
       <div class="col-xs-8" style="padding-top:15px;">
               <font style="font-size:18px;">จังหวัด :</font>
       <select name="text3" id="text3" class="form-control" style="width:100%; height:40px;" onchange="data_show(this.value,'text4');">
       <option value=""> จังหวัด </option>
      <?php 
	  	$prov=get_province();
		for($i=1;$i<=$prov[0][0];$i++){
		?>
      	<option value="<?=$prov[$i][1];?>"> - <?=$prov[$i][3];?></option>
      <?php }?>
       </select>
      </div>
      <div class="col-xs-2"></div>
      
       <div class="col-xs-12"></div>
       
       
       
       <div class="col-xs-2"></div>
       <div class="col-xs-8" style="padding-top:15px;">
        <font style="font-size:18px;">อำเภอ / เขต :</font>
       <select name="text4" id="text4" class="form-control" style="width:100%; height:40px;" onchange="data_show(this.value,'text5');">
       <option value=""> อำเภอ / เขต </option>
       </select>
      </div>
      <div class="col-xs-2"></div>
      
       <div class="col-xs-12"></div>
       
       <div class="col-xs-2"></div>
       <div class="col-xs-8" style="padding-top:15px;">
               <font style="font-size:18px;">ตำบล / แขวง  :</font>
       <select name="text5" id="text5" class="form-control" style="width:100%; height:40px;">
       <option value=""> ตำบล / แขวง </option>
       </select>
      </div>
      <div class="col-xs-2"></div>
      
       <div class="col-xs-12"></div>
         
      
       

      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">อีเมล์ :</font>
        <input name="text6" id="text6" type="email" class="form-control" placeholder="อีเมล์ :" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
       
       <div class="col-xs-12"></div>

      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">เบอร์โทรศัพท์ :</font>
        <input name="text7" id="text7" type="text" class="form-control" placeholder="เบอร์โทร :" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
      
       <div class="col-xs-12"></div>

      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">แฟ็กซ์ :</font>
        <input name="text8" id="text8" type="text" class="form-control" placeholder="แฟ็กซ์ :" style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
      
       <div class="col-xs-12"></div>

      <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">เลขประจำตัวผู้เสียภาษี :</font>
        <input name="text9" id="text9" type="text" class="form-control" placeholder="เลขประจำตัวผู้เสียภาษี : " style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
  	  <div class="col-xs-12"></div>
     
     <div class="col-xs-2" style="display:none;"></div>
      <div class="col-xs-8" style="padding-top:15px; display:none;">
       <font style="font-size:18px; display:none;">ประเภทร้าน :</font>
       <select name="text10" id="text10" class="form-control" style="width:100%; height:40px;  display:none;">
        <option value=""> ประเภทร้าน </option>
        <option value="1"> ร้านหลัก </option>
        <option value="2"> ร้านย่อย </option>
       </select>
      </div>
      <div class="col-xs-2" style="display:none;"></div>
      
       <div class="col-xs-12" style="display:none;"></div>
       
       <div class="col-xs-2" style="display:none;"></div>
      <div class="col-xs-8" style="padding-top:15px; display:none;">
       <font style="font-size:18px; display:none;">สิทธิการขาย :</font>
       <select name="text11" id="text11" class="form-control" style="width:100%; height:40px;">
        <option value=""> สิทธิการขาย </option>
        <option value="1"> ระเบิดราก </option>
        <option value="2"> เคมี </option>
       </select>
      </div>
      <div class="col-xs-2" style="display:none;"></div>
      
       <div class="col-xs-12" style="display:none;"></div>
       
         <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">ชื่อผู้ติดต่อ :</font>
        <input name="text12" id="text12" type="text" class="form-control" placeholder="ชื่อผู้ติดต่อ : " style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
  	  <div class="col-xs-12"></div>
      
        <div class="col-xs-2"></div>
      <div class="col-xs-8" style="padding-top:15px;">
              <font style="font-size:18px;">เบอร์โทรศัพพท์ผู้ติดต่อ :</font>
        <input name="text13" id="text13" type="text" class="form-control" placeholder="เบอร์โทรศัพพท์ผู้ติดต่อ : " style="width:100%; height:40px;">
      </div>
      <div class="col-xs-2"></div>
  	  <div class="col-xs-12"></div>
  
  </div>
  
  
  <div class="col-md-12" align="center">
    <button type="submit" class="btn btn-primary" style="background-color:#364150; width:150px; height:50px;">ยืนยัน</button>
  </div>
  
  
  <script language="javascript">
// Start XmlHttp Object
function uzXmlHttp(){
    var xmlhttp = false;
    try{
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }catch(e){
        try{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }catch(e){
            xmlhttp = false;
        }
    }
 
    if(!xmlhttp && document.createElement){
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
// End XmlHttp Object

function data_show(select_id,result){
	var url = 'get_province.php?select_id='+select_id+'&result='+result;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
}
//window.onLoad=data_show(5,'amphur'); 
</script>
  

