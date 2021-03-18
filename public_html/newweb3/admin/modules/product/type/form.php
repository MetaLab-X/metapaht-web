<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$data[1]=$_POST["txt1"]; 
		$insert=mysql_query("insert into  tb_product_type (product_type_name,lastupdate,updateby) values('".$data[1]."','".$date[1]."','$adminID')");
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