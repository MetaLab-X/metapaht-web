<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$employeeID=$_POST['employee_id'];
	for($i=0;$i<=9;$i++)
	{	
		$data[$i]=$_POST["txt".$i]; 
	}
	
	$pic=$_FILES['file1']['name'];
	$dataF=CheckImage($_FILES['file1']['type']);
	if($pic!="")
		{
			if($dataF=="true")
			{
				$temp1="../../../upload/img_employee/".$date[0]."-".$pic;
				$temp2="upload/img_employee/".$date[0]."-".$pic;
				$qry=mysql_query("update tb_employee set employee_img='$temp2' where employee_id='$employeeID'");
				if($qry){$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);}
				else if(!$qry){echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลพนักงานได้');</script>";	}
			}
		}
	
	
	
	$update=update_employee($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$date[1],$adminID,$employeeID);
		if($update)
		{
			echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลพนักงานเสร็จสมบูรณ์');window.parent.parent.location.reload();</script>";	
		}
		else
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลพนักงานได้');</script>";	
		}	

	
?>