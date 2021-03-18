<?php
	session_start();
	include "../../libraries/config/config.php";
	include "../../libraries/check_fileType.php";
	$date=get_Action_date();
	$customer=$_POST['cus_id'];
	$adminID=$_SESSION["user_id"];
	$prov=$_POST['text1'];
	$amphur=$_POST['text2'];
	$qry=mysql_query("insert into tb_zone_customer values('','$customer','$prov','$amphur','".$date[1]."','$adminID')");
	if($qry)
	{
		echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเสร็จสมบูรณ์');</script>";	
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
	}
?>