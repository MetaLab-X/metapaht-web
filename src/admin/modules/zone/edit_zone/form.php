<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$zoneId=$_POST['zoneID'];
	$zone=$_REQUEST['zone'];
	$date=get_Action_date();
	
	$qry=mysql_query("update tb_zone set zone_name='$zone', add_by='$adminID', add_date='".$date[1]."' where zone_id='$zoneId'");
	
	if($qry)
		{
			echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเสร็จสมบูรณ์');</script>";	
			echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลได้');</script>";	
		}	
	
?>