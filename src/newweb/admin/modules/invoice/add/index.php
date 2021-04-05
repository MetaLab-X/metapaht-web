<?php 
	session_start();
	include "libraries/config/config.php";
	include "modules/invoice/add/function.php";
	$customer=customer_list();
	$customerSend=customer_listSend();
	$employee=employee_list();
	$product=product_list();
	
	//echo $customer[0][0];
?>

<script type="text/javascript">
  function refreshPage1(invID){ window.location="../../../index.php?content=invoice&subpage=Edit_Invoice&view="+invID;	}
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
		$( "#txt2" ).datepicker("setDate", currentDate);
		$( "#txt2" ).datepicker().change(dateChanged)
    .on('changeDate', dateChanged);;
		
		$( "#txt7" ).datepicker({dateFormat: 'dd-mm-yy'});
		$( "#txt7" ).datepicker("setDate", new Date().getDay+payDate);
		
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
<form action="modules/invoice/add/form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData();">
  <input name="child" id="child" type="hidden" value="" />
  <input name="child2" id="child2" type="hidden" value="" />
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
				<div class="col-xs-9" style="padding-top:2px;"><input name="txt2" type="text" class="form-control" id="txt2" style="width:100%; height:35px;" readonly="readonly" placeholder="วันที่"></div>
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> นามผู้ซื้อ : </div>
				<div class="col-xs-10">
				<input type="text" name="txt3" id="txt3" class="form-control" placeholder="ผู้ซื้อ" style="width:300px; height:35px;">
          
                
          </div>
				<div class="col-xs-2"> ที่อยู่ : </div>
				<div class="col-xs-10" style="padding-top:2px;">
				  <textarea name="txt4" id="txt4"  rows="5" class="form-control"  style="width:300px; height:80px;" placeholder="ที่อยู่" disabled="disabled"></textarea>
				</div>
                
          <div class="col-xs-2"> ปลายทาง : </div>
				<div class="col-xs-10" style="padding-top:2px;">
				  <textarea name="txt9" rows="5" class="form-control" id="txt9" style="width:300px; height:100px;" placeholder="ปลายทาง"></textarea>
				 <a class="btn btn-default btn-sm fancybox2 fancybox.iframe" href="modules/invoice/add_inv/index.php" style="margin-top:5px; background-color:#060; color:#FFF; font-size:16px; border:0px;">
 					 <i class="fa fa-user-plus " aria-hidden="true" style="font-size:13px;"></i> เพิ่มข้อมูลร้านค้า
                 </a>
                </div>
			</div>
			<div class="col-xs-5">
				<div class="col-xs-3"> เลขที่ใบสั่งซื้อ : </div>
				<div class="col-xs-9"><input type="text" name="txt5" id="txt5" class="form-control" placeholder="เลขที่ใบสั่งซื้อ" style="width:100%; height:35px;"></div>
				<div class="col-xs-3"> การชำระเงิน : </div>
				<div class="col-xs-8"style="padding-top:2px;"><input type="text" name="txt6" id="txt6" class="form-control" placeholder="การชำระเงิน" style="width:100%; height:35px;" value="7" onkeyup="dateChanged(this);"></div>
                <div class="col-xs-1"style="padding-top:2px;"> วัน</div>
				<div class="col-xs-3"> กำหนดชำระ : </div>
				<div class="col-xs-9"style="padding-top:2px;"><input name="txt7" type="text" class="form-control" id="txt7" style="width:100%; height:35px;" readonly="readonly" placeholder="กำหนดชำระ"></div>
				<div class="col-xs-3"> พนักงานขาย : </div>
				<div class="col-xs-9"style="padding-top:2px;">
                 <select id="txt8" name="txt8" class="form-control" style="width:300px; height:35px;" onchange="data_showPosition(this.value, 'position');">
    	<option value="" selected="selected">พนักงานขาย</option>
		<?php 
		for($i=1;$i<=$employee[0][0];$i++){
		?>
    	<option value="<?=$employee[$i][1];?>"><?=$employee[$i][4];?></option>
    	<?php }?>
  </select>
                
             </div>
             <div class="col-xs-3"> ตำแหน่ง : </div>
             <div class="col-xs-9"style="padding-top:2px;">
             <input type="text" name="position" id="position" class="form-control" placeholder="ตำแหน่ง" style="width:300px; height:35px;" disabled="disabled">
             </div>
             
             
			</div>

			<div class="col-md-12" style="padding-top:10px;"></div>

			<div class="col-xs-7">
				<div class="col-xs-2"> </div>
				<div class="col-xs-10"></div>
			</div>
			<div class="col-xs-5"></div>

			<div class="col-md-12" style="padding-top:10px;"></div>
        	<div class="col-md-12" style="padding-top:10px; padding-bottom:15px;" align="right"><input name="sub" type="submit"  value="บันทึกข้อมูล " style="border:0px; background-color:#364150; color:#FFF;  border-radius:1px; padding:0px 10px 0px 10px;"/></div>
            </form>
   
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
