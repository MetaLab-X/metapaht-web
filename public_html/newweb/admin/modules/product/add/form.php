<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$data[1]=$_POST['text1'];
	$data[2]=$_POST['text2'];
	$data[3]=$_POST['text3'];
	$pic=$_FILES['text4']['name'];
	$dataF=CheckImage($_FILES['text4']['type']);
	
	if($pic!="")
	{
		if($dataF=="true")
		{
			$temp1="../../../upload/img_product/".$date[0]."-".$pic;
			$temp2="upload/img_product/".$date[0]."-".$pic;
			$insert=insert_product($data[1], $data[2], $data[3], $temp2, $date[1],$adminID);
			if($insert)
			{
				$ict=move_uploaded_file($_FILES["text4"]["tmp_name"],$temp1);
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลสินค้าเสร็จสมบูรณ์');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
			}
			else
			{
				echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
			}								
		}
		else{echo "<script language=\"JavaScript\">alert('คำเตือน : รูปภาพต้องเป็นไฟล์ PNG, JPG, JPEG');</script>";}
	}
	else if($pic=="")
	{
			$temp2="upload/img_product/product_null.png";
			$insert=insert_product($data[1], $data[2], $data[3], $temp2, $date[1],$adminID);
			if($insert)
			{
				$ict=move_uploaded_file($_FILES["text4"]["tmp_name"],$temp1);
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลสินค้าเสร็จสมบูรณ์');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
			}
			else
			{
				echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลได้');</script>";	
			}		
	}
	
	
?>