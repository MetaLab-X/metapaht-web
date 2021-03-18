<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	for($i=0;$i<=9;$i++)
	{	
		$data[$i]=$_POST["txt".$i]; 
	}
	
	$pic=$_FILES['file1']['name'];
	$dataF=CheckImage($_FILES['file1']['type']);
	
	
	$checkUser=Search_employee($data[0]);
	if($checkUser)
	{
		
		if($pic!="")
		{
			if($dataF=="true")
			{
				$temp1="../../../upload/img_employee/".$date[0]."-".$pic;
				$temp2="upload/img_employee/".$date[0]."-".$pic;
						
			}
		}
		else {$temp2="upload/img_employee/null_user.png";}
		/****************************************************/
		$insert=insert_employee($data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$temp2,$date[1],$adminID);
				if($insert)
				{
					$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
					echo "<script language=\"JavaScript\">alert('เพิ่มพนักงานเสร็จสมบูรณ์');</script>";	
					echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
				}
				else
				{
					echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลพนักงานได้');</script>";	
				}	
		/****************************************************/
		
		
		
		
	
	}
	else { echo "<script language=\"JavaScript\">alert('คำเตือน : มีพนักงานแล้วในระบบค่ะ');</script>";	}
	
?>