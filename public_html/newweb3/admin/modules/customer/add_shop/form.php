<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$cusID=$_POST['cusID'];
	for($i=1;$i<=13;$i++){	$data[$i]=$_POST["text".$i]; }
	$insert=insert_customer($data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $date[1],$adminID,$cusID);
	if($insert)
	{
		echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลลูกค้าเสร็จสมบูรณ์');</script>";	
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลลูกค้าได้');</script>";	
	}	
	
?>