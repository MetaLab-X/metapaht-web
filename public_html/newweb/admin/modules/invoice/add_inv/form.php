<?php
	session_start();
	include "../../../libraries/config/config.php";
	include "../../../libraries/check_fileType.php";
	include "function.php";
	$date=get_Action_date();
	$adminID=$_SESSION["user_id"];
	$setType=$_POST['setType'];
	$MainShopID=$_POST['txt_1'];
	for($i=0;$i<=13;$i++){	$data[$i]=$_POST["text".$i]; }
	$insert=insert_customer($setType,$MainShopID,$data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12], $data[13], $date[1],$adminID);
	if($insert!="")
	{
		
		$address=trim(preg_replace('/\s\s+/', ' ', $data[2]));
		if($data[5]!="")
		{
			$fetdata5=mysql_fetch_array(mysql_query("select * from district where district.DISTRICT_ID='".$data[5]."'"));
			$address=$address." ต.".$fetdata5['DISTRICT_NAME'];
		}
		
		$fetdata4=mysql_fetch_array(mysql_query("select * from amphur where amphur.AMPHUR_ID='".$data[4]."'"));
		$address=$address." อ.".$fetdata4['DISTRICT_NAME'];
		
		$fetdata3=mysql_fetch_array(mysql_query("select * from province where province.PROVINCE_ID='".$data[3]."'"));
		$address=$address." จ.".$fetdata3['PROVINCE_NAME'];
		
		$address=$address."".$fetdata4['POSTCODE'];
		
		$address=$address."  ".$data[7];

		echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลลูกค้าเสร็จสมบูรณ์');</script>";	
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage('$address','$insert');</script>"; 
	}
	else
	{
		echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถเพิ่มข้อมูลลูกค้าได้');</script>";	
	}	
	
?>