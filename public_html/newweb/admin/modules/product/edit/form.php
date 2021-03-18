<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$proid=$_POST['proID'];
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
			mysql_query("update tb_product set product_img='$temp2' where product_id='$proid'");
			$ict=move_uploaded_file($_FILES["text4"]["tmp_name"],$temp1);						
		}
		else{echo "<script language=\"JavaScript\">alert('คำเตือน : รูปภาพต้องเป็นไฟล์ PNG, JPG, JPEG');</script>";}
	}
	$update=update_product($proid, $data[1], $data[2], $data[3], $date[1],$adminID);
	if($update)
	{
		echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลสินค้าเสร็จสมบูรณ์');</script>";	
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถแก้ไขข้อมูลได้');</script>";	
	}	
	
	
	
?>