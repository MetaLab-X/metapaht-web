<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	for($i=0;$i<=3;$i++)
	{	
		$data[$i]=$_POST["txt".$i]; 
	}
	$checkUser=Search_user($data[2]);
	if($checkUser)
	{
		$insert=insert_user($data[0],$data[1],$data[2],$data[3],$date[1],$adminID);
		if($insert)
		{
			echo "<script language=\"JavaScript\">alert('เพิ่มผู้ดูแลเสร็จสมบูรณ์');</script>";	
			echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลผู้ดูแลได้');</script>";	
		}	
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : มีผู้ดูแลแล้วในระบบค่ะ');</script>";	
	}
	
?>