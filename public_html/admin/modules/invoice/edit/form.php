<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";

	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$ivID=$_POST['ivID'];
	$data1=$_POST['txt1'];
	$data2=$_POST['txt2'];
	$data3=$_POST['txt3'];
	$data4=$_POST['txt4'];
	$data5=$_POST['txt5'];
	$data6=$_POST['txt6'];
	$data7=$_POST['txt7'];
	$data8=$_POST['txt8'];
	$data9=$_POST['txt9'];
	$sendID=$_POST['child'];
	$sendID2=$_POST['child2'];
	
	$numRow1=mysql_num_rows(mysql_query("select customer_id from tb_customer where customer_id='$sendID2' and customer_name like '%$data3%'"));
	
	if($numRow1!=0 || $numRow1!="")
	{
		$numRow2=mysql_num_rows(mysql_query("select customer_id from tb_customer where customer_id='$sendID'"));
		if($numRow2!=0 || $numRow2!="")
		{
				$sql="update tb_invoice set 
				invoice_code='$data1',
				po_code='$data5',
				invoice_date='$data2',
				invoice_pay='$data6',
				pay_date='$data7',
				employee_id='$data8',
				customer_id='$sendID2',
				send_ot_customer_id='$data9',
				customer_s_id='$sendID',
				invoice_remark='',
				lastupdate='".$date[1]."',
				updateby='$adminID'
				where invoice_id='$ivID'";
				
				echo $sql;
				
				$qry=mysql_query($sql);
				 if($qry)
				 {
					 echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลการสั่งซื้อเสร็จสมบูรณ์ ');</script>";	
					echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.refreshPage1();</script>"; 
				}
				else 
				{
					echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลได้');</script>";	
				}
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ขออภัยค่ะไม่มีข้อมูลลูกค้ารายชื่อนี้ในรายการส่งสินค้า');</script>";	
			echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.customerName2();</script>"; 
		}
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : ขออภัยค่ะไม่มีข้อมูลลูกค้ารายชื่อนี้ในรายการซื้อสินค้า');</script>";	
		echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.customerName();</script>"; 
	}
	
?>