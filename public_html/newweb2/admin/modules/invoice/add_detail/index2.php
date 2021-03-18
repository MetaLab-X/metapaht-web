<?php 
	session_start();
	include "libraries/config/config.php";
	include "function.php";
	$customer=customer_list();
	$employee=employee_list();
	$product=product_list();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
  function refreshPage(){	window.location="../../<? echo $repage;?>";	}
</script>
<script>
$(function() {
 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 $("ul.navbar-nav li a").each(function(){
 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 $(this).addClass("active-menu");
 })
 });
function refreshPageInd(){	window.location="index.php";}
function checkData()
{
	var data1=document.getElementById('txt1').value;
	var data2=document.getElementById('txt2').value;
	var data3=document.getElementById('txt3').value;
	var data5=document.getElementById('txt5').value;
	var data6=document.getElementById('txt6').value;
	var data7=document.getElementById('txt7').value;
	var data8=document.getElementById('txt8').value;
	var data9=document.getElementById('txt9').value;
	
	var  datat1=Trim(data1);
	var  datat2=Trim(data2);
	var  datat3=Trim(data3);
	var  datat5=Trim(data5);
	var  datat6=Trim(data6);
	var  datat7=Trim(data7);
	var  datat8=Trim(data8);
	var  datat9=Trim(data9);
	
	if(datat1.length==0 || datat1=="")
	{
		alert("คำเตือน : เลขที่ใบส่งของ");
		document.getElementById('txt1').focus();
		return false;
	}
	if(datat2.length==0 || datat2=="")
	{
		alert("คำเตือน : วันที่");
		document.getElementById('txt2').focus();
		return false;
	}
	if(datat3.length==0 || datat3=="")
	{
		alert("คำเตือน : ชื่อผู้ซื้อ");
		document.getElementById('txt3').focus();
		return false;
	}
	if(datat5.length==0 || datat5=="")
	{
		alert("คำเตือน : เลขที่ใบสั่งซื้อ");
		document.getElementById('txt5').focus();
		return false;
	}
	if(datat6.length==0 || datat6=="")
	{
		alert("คำเตือน : การชำระเงิน");
		document.getElementById('txt6').focus();
		return false;
	}
	if(datat7.length==0 || datat7=="")
	{
		alert("คำเตือน : กำหนดชำระเงิน");
		document.getElementById('txt7').focus();
		return false;
	}
	if(datat8.length==0 || datat8=="")
	{
		alert("คำเตือน : พนักงานขาย");
		document.getElementById('txt8').focus();
		return false;
	}
	if(datat9.length==0 || datat9=="")
	{
		alert("คำเตือน : ปลายทาง");
		document.getElementById('txt9').focus();
		return false;
	}
	else {return true;}
	
}

function checkData2()
{
		var dataType=document.getElementById('invoiceID').value;
		
		if(dataType.length==0 || dataType==""){alert("คำเตือน : กรูณาเพิ่มข้อมูลการสั่งซื้อสินค้า"); document.getElementById('txt1').focus();}
		else 
		{
			var data1=document.getElementById('tetx21').value;
			var data2=document.getElementById('tetx21').value;
			var data3=document.getElementById('tetx21').value;
			var data4=document.getElementById('tetx21').value;
			
			var datat1=Trim(data1);
			var datat2=Trim(data2);
			var datat3=Trim(data3);
			var datat4=Trim(data4);
			
			if(datat1.length==0 || datat1=="")
			{
				alert("คำเตือน : ชื่อสินค้า");
				document.getElementById('tetx21').focus();
				return false;
			}
			if(datat2.length==0 || datat2=="")
			{
				alert("คำเตือน : จำนวน");
				document.getElementById('tetx22').focus();
				return false;
			}
			if(datat3.length==0 || datat3=="")
			{
				alert("คำเตือน : ราคาต่อหน่วย");
				document.getElementById('tetx23').focus();
				return false;
			}
			if(datat4.length==0 || datat4=="")
			{
				alert("คำเตือน : ");
				document.getElementById('tetx24').focus();
				return false;
			}
			else {return false;}
		}
		
}
</script>

<script>
	  $( function() {
		$( "#txt2" ).datepicker({dateFormat: 'dd-mm-yy'});
		$( "#txt7" ).datepicker({dateFormat: 'dd-mm-yy'});
		
		} );
  </script>
    <!-- TITLE -->
    <iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:block;"></iframe>
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page);?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->
<form action="modules/invoice/add/form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
   <div class="pageModuleTitle" style="font-size:19px;">
  <div style="height:10px;"></div>


  	<div>

			<div class="col-xs-10">
				<font size="7">บริษัท บุญนภา 60-1 จำกัด</font>
			</div>
			<div class="col-xs-2" align="right">
				<font size="7">ใบส่งของ</font>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-9"></div>
			<div class="col-xs-3">
				<div class="col-xs-3"> เลขที่ : </div>
				<div class="col-xs-9"><input type="text" name="txt1" id="txt1" class="form-control" placeholder="เลขที่" style="width:100%; height:35px;"></div>
				<div class="col-xs-3"> วันที่ : </div>
				<div class="col-xs-9" style="padding-top:2px;"><input type="text" name="txt2" id="txt2" class="form-control" placeholder="วันที่" style="width:100%; height:35px;"></div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> นามผู้ซื้อ : </div>
				<div class="col-xs-10">
                <select id="txt3" name="txt3" class="form-control" style="width:300px; height:35px;">
    	<option value="" selected="selected">ผู้ซื้อ</option>
		<?php 
		for($i=1;$i<=$customer[0][0];$i++){
		?>
    	<option value="<?=$customer[$i][1];?>"><?=$customer[$i][2];?></option>
    	<?php }?>
  </select>
                
          </div>
				<div class="col-xs-2"> ที่อยู่ : </div>
				<div class="col-xs-10"style="padding-top:2px;">
				  <textarea name="txt4" rows="5" class="form-control" id="txt" style="width:300px; height:80px;" placeholder="ที่อยู่"></textarea>
				</div>
                
          <div class="col-xs-2"> ปลายทาง : </div>
				<div class="col-xs-10"style="padding-top:2px;"><input type="text" class="form-control" name="txt9" id="txt9" placeholder="ปลายทาง" style="width:300px; height:35px;"></div>
			</div>
			<div class="col-xs-5">
				<div class="col-xs-3"> เลขที่ใบสั่งซื้อ : </div>
				<div class="col-xs-9"><input type="text" name="txt5" id="txt5" class="form-control" placeholder="เลขที่ใบสั่งซื้อ" style="width:100%; height:35px;"></div>
				<div class="col-xs-3"> การชำระเงิน : </div>
				<div class="col-xs-9"style="padding-top:2px;"><input type="text" name="txt6" id="txt6" class="form-control" placeholder="การชำระเงิน" style="width:100%; height:35px;"></div>
				<div class="col-xs-3"> กำหนดชำระ : </div>
				<div class="col-xs-9"style="padding-top:2px;"><input type="text" name="txt7" id="txt7" class="form-control" placeholder="กำหนดชำระ" style="width:100%; height:35px;"></div>
				<div class="col-xs-3"> พนักงานขาย : </div>
				<div class="col-xs-9"style="padding-top:2px;">
                 <select id="txt8" name="txt8" class="form-control" style="width:300px; height:35px;" >
    	<option value="" selected="selected">พนักงานขาย</option>
		<?php 
		for($i=1;$i<=$employee[0][0];$i++){
		?>
    	<option value="<?=$employee[$i][1];?>"><?=$employee[$i][4];?></option>
    	<?php }?>
  </select>
                
             </div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> </div>
				<div class="col-xs-10"></div>
			</div>
			<div class="col-xs-5"></div>

			<div class="col-md-12" style="padding-top:10px;"></div>
        	<div class="col-md-12" style="padding-top:10px; padding-bottom:15px;" align="right"><input name="sub" type="submit"  value="บันทึกข้อมูล " style="border:0px; background-color:#090; color:#FFF; height:30px; border-radius:2px;"/></div>
            </form>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  	          <tr>
  	            <td height="35" colspan="5" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
              <form action="modules/invoice/add/product.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData2();">
                     <input name="invoiceID" id="invoiceID" type="hidden" value="" />
                <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:10px;">
    <select id="tetx21" name="tetx21" class="form-control" style="width:250px; height:35px;">
    	<option value="" selected="selected">รายละเอียดสินค้า</option>
		<?php 
		for($i=1;$i<=$product[0][0];$i++){
		?>
    	<option value="<?=$product[$i][1];?>"><?=$product[$i][3];?></option>
    	<?php }?>
  </select>
    
 </td>
    <td style="padding-right:10px;"><input type="text" id="tetx22" name="tetx22" class="form-control" placeholder="จำนวน" style="width:250px; height:35px;" /></td>
     <td style="padding-right:10px;"><input type="text" id="tetx23" name="tetx23" class="form-control" placeholder="หน่วยละ" style="width:250px; height:35px;" /></td>
    <td style="padding-right:10px;"><input type="text"  id="tetx24" name="tetx24" class="form-control" placeholder="จำนวนเงิน" style="width:250px; height:35px;" /></td>
     <td style="padding-right:10px;">
      <input name="sub" type="submit"  value="เพิ่มรายการสินค้า" style="border:0px; background-color:#090; color:#FFF; height:30px; border-radius:2px;"/>
     </td>
  </tr>
</table>

           
                
               </form>
                </td>
        </tr>
  	          <tr>
  	            <td width="40" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">ลำดับ</td>
  	            <td width="150" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รายละเอียดสินค้า</td>
  	            <td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">จำนวน</td>
  	            <td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">หน่วยละ</td>
  	            <td width="80" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">จำนวนเงิน</td>
        </tr>
  	          <?php if($dataSlide[0][0]==0 || $dataSlide[0][0]==""){ ?>
  	          <tr>
  	            <!--<td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี Member ค่ะ</td>-->
  	            <td width="80" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;"> 1 </td>
  	            <td width="80" height="50" align="left" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;"><input type="text" class="form-control" placeholder="รายละเอียดสินค้า" style="width:100%; height:35px;" /></td>
  	            <td width="80" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;"><input type="text" class="form-control" placeholder="จำนวน" style="width:100%; height:35px;" /></td>
  	            <td width="80" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;"><input type="text" class="form-control" placeholder="หน่วยละ" style="width:100%; height:35px;" /></td>
  	            <td width="80" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;"><input type="text" class="form-control" placeholder="จำนวนเงิน" style="width:100%; height:35px;" /></td>
        </tr>
  	          <?php
        }
        else {
        $g=1;
        for($i=1;$i<=$dataSlide[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
      	  if($dataSlide[$i][8]==1) {$setIMG="setOpacIMG1";}
      	  else if($dataSlide[$i][8]==0) {$setIMG="setOpacIMG2";}
        ?>
  	          <tr>
  	            <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;"><a id="slide" name="slide"></a> <?php echo $g;?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $dataSlide[$i][11];?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][2];?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $dataSlide[$i][3];?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $dataSlide[$i][4];?></td>

        </tr>
  	          <?php $g=$g+1;} }?>
      </table>
  	</div>
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
