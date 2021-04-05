<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$zone=$_REQUEST['zone'];
	$date=get_Action_date();
	
	$qry=mysql_query("insert into tb_zone value('','$zone','$adminID','".$date[1]."')");
	
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