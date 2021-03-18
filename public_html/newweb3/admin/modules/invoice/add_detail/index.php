<?php 
	session_start();
	include "../../../libraries/config/config.php";
	include "function.php";
	$invoiceID=$_REQUEST['invID'];
	$fetOrer=mysql_fetch_array(mysql_query("select * from tb_invoice where invoice_id='$invoiceID'"));
	$detOrder=product_detList($invoiceID);
	
?>
<link href="../../../assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="../../../assets/css/bootstrap.css">
<link rel="stylesheet" href="../../../assets/css/style_admin.css">
<script type="text/javascript" src="../../../assets/javascript/checkword.js"></script>
<script>
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
			
			/*if(datat3.length==0 || datat3=="")
			{
				alert("คำเตือน : ราคาต่อหน่วย");
				document.getElementById('tetx23').value="";
				document.getElementById('tetx23').focus();
				return false;
			}
			if(isNaN(datat3))
			{
				alert("คำเตือน : ราคาต่อหน่วยต้องเป็นตัวเลข และมีค่ามากกว่า 0");
				document.getElementById('tetx23').value="";
				document.getElementById('tetx23').focus();
				return false;
			}
			if(datat3<=0)
			{
				alert("คำเตือน : ราคาต่อหน่วยต้องเป็นตัวเลข และมีค่ามากกว่า 0");
				document.getElementById('tetx23').value="";
				document.getElementById('tetx23').focus();
				return false;
			}*/
			
			else {return true;}
		}
		
	
	function refreshPage()
	{
		window.location.reload();
	}
</script>
<style>
	body{background-color:#fff;}
	.c {font-family: 'Kanit', sans-serif;}
</style>
<iframe id="addForm" name="addForm" src="" style="width:100%;height:400px;border:0px; display:none;"></iframe>
  
  <div class="col-md-12" style="background-color:#364150; padding-top:15px; padding-bottom:15px;" align="center">
    <font color="#fff" style="font-size:20px;">เพิ่มข้อมูลสินค้า เลขที่ใบสั่งซื้อ : <?=$fetOrer['invoice_code'];?></font>
  </div>
    
    <div class="row" style="padding-bottom:40px;">
      <div class="col-xs-12" style="padding-top:15px;">
       <table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #e8e8e8 solid;">
  	          <tr>
  	            <td height="35" colspan="4" align="right" valign="middle" bgcolor="#FFFFFF" style="padding-right:15px; padding-top:15px; padding-bottom:10px;">
              <form action="form.php" method="post" enctype="multipart/form-data" name="formEditer" target="addForm" onsubmit="return checkData2();">
                     <input name="invoiceID" id="invoiceID" type="hidden" value="<?=$invoiceID;?>" />
                <table width="10" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="padding-right:10px;"><select id="tetx21" name="tetx21" class="form-control" style="width:300px; height:35px;">
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
      <input name="sub" type="submit"  value="เพิ่มรายการสินค้า" style="border:0px; background-color:#090; color:#FFF; height:30px; border-radius:2px;"/>
     </td>
  </tr>
</table>

           
                
               </form>
                </td>
        </tr>
  	          <tr>
  	            <td width="106" height="35" align="center" valign="middle" bgcolor="#f0f0f0" style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid; font-weight:normal;">ลำดับ</td>
  	            <td width="1115" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid; border-right:1px #e8e8e8 solid;">รายละเอียดสินค้า</td>
  	            <td width="345" height="35" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">จำนวน</td>
  	            <td width="194" align="center" valign="middle" bgcolor="#f0f0f0"  style="border-bottom:1px #9b9b9b solid;">ลบ</td>
         </tr>
  	          <?php if($detOrder[0][0]==0 || $detOrder[0][0]==""){ ?>
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
        for($i=1;$i<=$detOrder[0][0];$i++){
      	  if($g%2!="0"){$bg="#f9f9f9";}
      	  else if($g%2=="0"){$bg="#FFFFFF";}
        ?>
  	          <tr>
  	            <td width="106" height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid;"><a id="slide" name="slide"></a> <?php echo $g;?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:50px;"><?php echo $detOrder[$i][3];?></td>
  	            <td height="50" align="left" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:10px;"><?php echo $detOrder[$i][4];?></td>
  	            <td height="50" align="center" valign="middle" bgcolor="<?php echo $bg;?>"  style="border-bottom:1px #e8e8e8 solid; border-right:1px #e8e8e8 solid; padding-bottom:8px; padding-top:8px; padding-left:0px;">
                <a href="delete.php?delID=<?php  echo $detOrder[$i][1];?>" target="addForm" title="ลบ" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')"> 
                <img src="../../../assets/images/icon041.png" width="35" height="35" />
                </a>
                </td>

         </tr>
  	          <?php $g=$g+1;} }?>
      </table>
          
 	</div>
    </div>
    

      
      
   
