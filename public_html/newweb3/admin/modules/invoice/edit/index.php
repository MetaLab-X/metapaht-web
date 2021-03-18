<?php 
	session_start();
	include "libraries/config/config.php";
	include "function.php";
	$invID=$_REQUEST['view'];
	$customer=customer_list();
	$customerSend=customer_listSend();
	
	$employee=employee_list();
	$dataInv=getInvData($invID);
	$addressCus=get_addressCusTom($dataInv['8']);
	$addressCusSend=get_addressCusTom($dataInv['14']);
	$productSaleDet=product_detListEdit($invID);
	
?>
<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>

 <link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
<script type="text/javascript">
  function refreshPage1(){ window.location="../../../index.php?content=invoice&subpage=Edit_Invoice&view="+<?=$invID;?>;	}
  function refreshPage2(address, SendID){  document.getElementById('txt9').value=address;  document.getElementById('child').value=SendID;}
    function customerName(){ document.getElementById('txt3').focus();}
  function customerName2(){ document.getElementById('txt9').focus();}
</script>
<script>
$(function() {
 var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
 $("ul.navbar-nav li a").each(function(){
 if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
 $(this).addClass("active-menu");
 })
 });
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
			var data1=document.getElementById('tetx21').value;
			var data2=document.getElementById('tetx22').value;
			var data3=document.getElementById('tetx23').value;
			
			var datat1=Trim(data1);
			var datat2=Trim(data2);
			var datat3=Trim(data3);
			
			if(datat1.length==0 || datat1=="")
			{
				alert("คำเตือน : ชื่อสินค้า");
				document.getElementById('tetx21').focus();
				return false;
			}
			if(datat2.length==0 || datat2=="")
			{
				alert("คำเตือน : จำนวน");
				document.getElementById('tetx22').value="";
				document.getElementById('tetx22').focus();
				return false;
			}
			if(isNaN(datat2))
			{
				alert("คำเตือน : จำนวนต้องเป็นตัวเลข และมีค่ามากกว่า 0");
				document.getElementById('tetx22').value="";
				document.getElementById('tetx22').focus();
				return false;
			}
			if(datat2<=0)
			{
				alert("คำเตือน : จำนวนต้องเป็นตัวเลข และมีค่ามากกว่า 0");
				document.getElementById('tetx22').value="";
				document.getElementById('tetx22').focus();
				return false;
			}
			
			else {return true;}
		}
		
		/***********************************************************/
var raw = [
    <?php for($i=1;$i<=$customerSend[0][0];$i++){?>
	{ value: <?php echo $customerSend[$i][1];?>, label: '<?php echo trim(preg_replace('/\s\s+/', ' ', $customerSend[$i][13]));?>'   }
	<?php 	if($i!=$customerSend[0][0]){echo ",";} }?>
];

var raw2 = [
    <?php for($i=1;$i<=$customer[0][0];$i++){?>
	{ value: <?php echo $customer[$i][1];?>, label: '<?php echo trim(preg_replace('/\s\s+/', ' ', $customer[$i][2]));?>'   }
	<?php 	if($i!=$customer[0][0]){echo ",";} }?>
];

var source  = [ ];
var mapping = { };

var source2  = [ ];
var mapping2 = { };


	$(document).ready(function(){
	for(var i = 0; i < raw.length; ++i) {
    source.push(raw[i].label);
    mapping[raw[i].label] = raw[i].value;
}

$('#txt9').autocomplete({
    minLength: 1,
    source: source,
    select: function(event, ui) {
        $('#child').val(mapping[ui.item.value]);
		//alert($('#child').val());
    }
});


for(var i = 0; i < raw2.length; ++i) {
    source2.push(raw2[i].label);
    mapping2[raw2[i].label] = raw2[i].value;
}
$('#txt3').autocomplete({
    minLength: 1,
    source: source2,
    select: function(event, ui) {
        $('#child2').val(mapping2[ui.item.value]);
		if($('#child2').val()!="")
		{
			data_show($('#child2').val(),'txt4');
		}
		//alert($('#child2').val());
		
    }
});


	
	
	
	});
/***********************************************************/

</script>

<script>
	  $( function() {
		var currentDate = new Date();
		var currentDate2 = new Date();
		var payDate=document.getElementById('txt6').value;
		
		$( "#txt2" ).datepicker({dateFormat: 'dd-mm-yy'});
		//$( "#txt2" ).datepicker("setDate", currentDate);
		$( "#txt2" ).datepicker().change(dateChanged)
    .on('changeDate', dateChanged);;
		
		$( "#txt7" ).datepicker({dateFormat: 'dd-mm-yy'});
		var str = toDate($( "#txt2" ).val());
		str.setDate(str.getDate() + parseInt(payDate));
		$( "#txt7" ).datepicker("setDate", str);
		
		} );
	  
	  	function dateChanged(ev) 
		{
			var payDate=document.getElementById('txt6').value;
			var str = toDate($( "#txt2" ).val());
			str.setDate(str.getDate() + parseInt(payDate));
			//alert(str);
			$( "#txt7" ).datepicker("setDate", str);
			
		}
		
		function toDate(dateStr) {
			const [day, month, year] = dateStr.split("-")
			return new Date(year, month - 1, day)
		}
		
		
			
	$(document).ready(function() {
			$('.fancybox2').fancybox({					
				closeClick  : false,
				autoDimensions:true,
				width		: '80%',
				height		: '200%',
				helpers   : { overlay : {closeClick: false}}
			});	
			
			
				$("#txt6").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
	
	});
	    
  </script>
    <!-- TITLE -->
    <iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page);?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->
<form action="modules/invoice/edit/form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
<input name="ivID" id="ivID" type="hidden" value="<?=$invID;?>" />
  <input name="child" id="child" type="hidden" value="<?=$dataInv[14];?>" />
  <input name="child2" id="child2" type="hidden" value="<?=$dataInv[8];?>" />

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
				<div class="col-xs-9"><input type="text" name="txt1" id="txt1" class="form-control" placeholder="เลขที่" style="width:100%; height:35px;" value="<?=$dataInv['2'];?>"></div>
				<div class="col-xs-3"> วันที่ : </div>
				<div class="col-xs-9" style="padding-top:2px;">
                <input type="text" name="txt2" id="txt2" class="form-control" placeholder="วันที่" style="width:100%; height:35px;" value="<?=$dataInv['4'];?>"></div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> นามผู้ซื้อ : </div>
				<div class="col-xs-10">
                <input type="text" name="txt3" id="txt3" class="form-control" placeholder="ผู้ซื้อ" style="width:300px; height:40px;" value="<?=$dataInv['15'];?>">
                
          </div>
				<div class="col-xs-2"> ที่อยู่ : </div>
				<div class="col-xs-10" style="padding-top:2px;">
				  <textarea name="txt4" id="txt4"  rows="5" class="form-control"  style="width:300px; height:80px;" placeholder="ที่อยู่" disabled="disabled"><?=$addressCus;?>
                  </textarea>
				</div>
                
          <div class="col-xs-2"> ปลายทาง : </div>
				<div class="col-xs-10"style="padding-top:2px;">
                  <textarea name="txt9" rows="5" class="form-control" id="txt9" style="width:300px; height:100px;" placeholder="ปลายทาง"><?=$dataInv[16]."  ".$addressCusSend;?></textarea>
				 <a class="btn btn-default btn-sm fancybox2 fancybox.iframe" href="modules/invoice/add_inv/index.php" style="margin-top:5px; background-color:#060; color:#FFF; font-size:16px; border:0px;">
 					 <i class="fa fa-user-plus " aria-hidden="true" style="font-size:13px;"></i> เพิ่มข้อมูลร้านค้า
                 </a>
                </div>
			</div>
			<div class="col-xs-5">
				<div class="col-xs-3"> เลขที่ใบสั่งซื้อ : </div>
				<div class="col-xs-9">
                <input type="text" name="txt5" id="txt5" class="form-control" placeholder="เลขที่ใบสั่งซื้อ" style="width:100%; height:35px;" value="<?=$dataInv['3'];?>"></div>
				<div class="col-xs-3"> การชำระเงิน : </div>
				<div class="col-xs-8"style="padding-top:2px;"><input type="text" name="txt6" id="txt6" class="form-control" placeholder="การชำระเงิน" style="width:100%; height:35px;" value="<?=$dataInv['5'];?>" onkeyup="dateChanged(this);"></div>
                    <div class="col-xs-1"style="padding-top:2px;">วัน</div>
				<div class="col-xs-3"> กำหนดชำระ : </div>
				<div class="col-xs-9"style="padding-top:2px;"><input type="text" name="txt7" id="txt7" class="form-control" placeholder="กำหนดชำระ" style="width:100%; height:35px;" value="<?=$dataInv['6'];?>"></div>
				<div class="col-xs-3"> พนักงานขาย : </div>
				<div class="col-xs-9"style="padding-top:2px;">
                 <select id="txt8" name="txt8" class="form-control" style="width:300px; height:35px;" onchange="data_showPosition(this.value, 'position');">
    	<option value="" selected="selected">พนักงานขาย</option>
		<?php 
		for($i=1;$i<=$employee[0][0];$i++){
		?>
    	<option value="<?=$employee[$i][1];?>"  <?php if($dataInv['7']==$employee[$i][1]){ echo "selected='selected'";}?> ><?=$employee[$i][4];?></option>
    	<?php }?>
  </select>
                
             </div>
               <div class="col-xs-3"> ตำแหน่ง : </div>
             <div class="col-xs-9"style="padding-top:2px;">
             <input type="text" name="position" id="position" class="form-control" placeholder="ตำแหน่ง" style="width:300px; height:35px;" disabled="disabled" value="<?=$dataInv['13'];?>">
             </div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> </div>
				<div class="col-xs-10"></div>
			</div>
			<div class="col-xs-5"></div>

			<div class="col-md-12" style="padding-top:10px;"></div>
        	<div class="col-md-12" style="padding-top:10px; padding-bottom:15px;" align="right"><input name="sub" type="submit"  value="บันทึกข้อมูล " style="border:0px; background-color:#364150;  color:#FFF; border-radius:1px; padding:0px 10px 0px 10px;"/></div>
            </form>
   
  	</div>
</div>
<div class="col-md-12" style="padding-top:10px;"></div>
<div class="col-md-12" style="padding:20px; border:1px #999 solid; border-radius:5px; font-size:20px;">
<!-- ADD list Product For Invoice-->
<div class="col-md-12" align="right">
  <iframe id="addFormSubProduct" name="addFormSubProduct" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
  <form action="modules/invoice/edit/form_addproduct.php" method="post" enctype="multipart/form-data" name="Product" id="Product" target="addFormSubProduct" onsubmit="return checkData2();">
                     <input name="invoiceID" id="invoiceID" type="hidden" value="<?=$invID;?>" />
                <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:10px;"><select id="tetx21" name="tetx21" class="form-control" style="width:350px; height:35px;">
      <option value="" selected="selected">รายละเอียดสินค้า</option>
      <?php 
	  $product=product_list();
		for($i=1;$i<=$product[0][0];$i++){
		?>
      <option value="<?=$product[$i][1];?>">
        <?=$product[$i][3];?>
        </option>
      <?php }?>
    </select></td>
    <td style="padding-right:10px;"><input type="text" id="tetx22" name="tetx22" class="form-control" placeholder="จำนวน" style="width:150px; height:35px;" /></td>
     <td style="padding-right:10px; display:none;"><input type="text" id="tetx23" name="tetx23" class="form-control" placeholder="หน่วยละ" style="width:150px; height:35px;" /></td>
    <td style="padding-right:10px;">&nbsp;</td>
     <td style="padding-right:10px;">
      <input name="sub" type="submit"  value="เพิ่มรายการสินค้า" style="border:0px; background-color:#364150; padding:0px 10px 0px 10px; color:#FFF;  border-radius:1px;"/>
     </td>
  </tr>
</table>         
               </form>
</div>
<!---->

<!-- SHOW list Product For Invoice-->
<div class="col-md-12" style="padding-top:20px;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  	          <tr>
  	            <td width="106" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">ลำดับ</td>
  	            <td width="1115" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รายละเอียดสินค้า</td>
  	            <td width="345" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">จำนวน</td>
  	            <td width="194" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบ</td>
         </tr>
  	          <?php if($productSaleDet[0][0]==0 || $productSaleDet[0][0]==""){ ?>
  	          <tr>
  	            <!--<td height="50" colspan="8" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#F00;">ขออภัยด้วยค่ะ ตอนนี้ยังไม่มี Member ค่ะ</td>-->
  	            <td width="106" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000;">&nbsp;</td>
  	            <td width="1115" height="50" align="left" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;">&nbsp;</td>
  	            <td height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;">&nbsp;</td>
  	            <td width="194" height="50" align="center" valign="middle" bgcolor="#FFFFFF"  style="border-bottom:1px #e8e8e8 solid; border-right:0px #e8e8e8 solid; color:#000; padding-left:2px; padding-right:2px;">&nbsp;</td>
         </tr>
  	          <?php
        }
        else {
        $g=1;
        for($i=1;$i<=$productSaleDet[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
        ?>
  	          <tr>
  	            <td width="106" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;"><a id="slide" name="slide"></a> <?php echo $g;?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $productSaleDet[$i][3];?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $productSaleDet[$i][4];?></td>
  	            <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
                <a href="modules/invoice/edit/delete.php?delID=<?php  echo $productSaleDet[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
                <img src="assets/images/icon041.png" width="35" height="35" border="0" />
                </a>
                </td>

         </tr>
  	          <?php $g=$g+1;} }?>
      </table>
      
      <div align="right" style="padding-right:0px; padding-top:10px;">

<a class="btn btn-default" href="index.php?content=invoice" aria-label="Settings" style="background-color:#1845b7; color:#FFFFFF;  padding:5px 30px 5px 30px; font-size:18px;">
 ตกลง  
</a></div>
      </div>
<!---->


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
	var url = 'modules/invoice/add/get_province.php?select_id='+select_id+'&result='+result;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).innerHTML =  xmlhttp.responseText;
}

function data_showPosition(select_id,result){
	var url = 'modules/invoice/add/get_province.php?select_id='+select_id+'&result='+result;
	//alert(url);
	
    xmlhttp = uzXmlHttp();
    xmlhttp.open("GET", url, false);
	xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8"); // set Header
    xmlhttp.send(null);
	document.getElementById(result).value =  xmlhttp.responseText;
}
//window.onLoad=data_show(5,'amphur'); 
</script>
