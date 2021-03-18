<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$data1=$_POST["tetx21"]; 
	$data2=$_POST["tetx22"]; 
	$data3=$_POST["tetx23"]; 
	$data4=$data2*$data3;
	$data5=$_POST["invoiceID"];
		$insert=mysql_query("INSERT INTO tb_invoice_detail VALUES ('', '$data5', '$data1', '$data2', '$data3', '0', '$data4')");
		if($insert)
		{
			echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเสร็จสมบูรณ์');</script>";	
			echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
		}	

	
?>