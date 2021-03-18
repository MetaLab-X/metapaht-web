<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$userID=$_POST['user_id'];
	for($i=0;$i<=3;$i++)
	{	
		$data[$i]=$_POST["txt".$i]; 
	}
		
	$update=update_user($data[0],$data[1],$data[2],$data[3],$date[1],$adminID,$userID);
		if($update)
		{
			echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลผู้ดูแลเสร็จสมบูรณ์');window.parent.parent.location.reload();</script>";	
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลผู้ดูแลได้');</script>";	
		}	

	
?>