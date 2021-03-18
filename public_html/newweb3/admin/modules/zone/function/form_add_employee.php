<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	$date=get_Action_date();
	$zoneType=$_POST['zoneType1'];
	$adminID=$_SESSION["user_id"];
	$emp=$_POST['text3'];
	$fetPosition=mysql_fetch_array(mysql_query("select * from tb_employee where tb_employee.employee_id='$emp'"));
	if($fetPosition['employee_position']=="0000000001" || $fetPosition['employee_position']=="0000000021")
	{
		$check=mysql_num_rows(mysql_query("select * from tb_zone_employee where employee_id='$emp' and zone_id = '$zoneType'"));//and zone_id = '$zoneType'
		if($check==0 || $check=="")
		{
			$qry=mysql_query("insert into tb_zone_employee values('','$zoneType','$emp','".$date[1]."','$adminID')");
			if($qry)
			{
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเสร็จสมบูรณ์');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
			}
			else
			{
				echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
			}
		}
		else { echo "<script language=\"JavaScript\">alert('คำเตือน : มีพนักงานอนี้อยู่แล้ว');</script>";	}
	}
	else 
	{
			$qry=mysql_query("insert into tb_zone_employee values('','$zoneType','$emp','".$date[1]."','$adminID')");
			if($qry)
			{
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเสร็จสมบูรณ์');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
			}
			else
			{
				echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
			}
	}
		
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">