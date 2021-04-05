<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	$date=get_Action_date();
	$zoneType=$_POST['zoneType'];
	$adminID=$_SESSION["user_id"];
	$prov=$_POST['text1'];
	$amphur=$_POST['text2'];
	/*$check=mysql_num_rows(mysql_query("SELECT * FROM tb_zone_province WHERE PROVINCE_ID = '$prov' AND AMPHUR_ID = '$amphur'"));
	if($check==0 || $check=="")
	{*/
		$qry=mysql_query("insert into tb_zone_province values('','$zoneType','$prov','$amphur','".$date[1]."','$adminID')");
		if($qry)
		{
			echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเสร็จสมบูรณ์');</script>";	
			echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
		}
	/*}else { echo "<script language=\"JavaScript\">alert('คำเตือน : มีอำเภอนี้อยู่ในพื้นที่การขายอื่นแล้ว');</script>";	}*/
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">