<?php
session_start();
include "../../../../libraries/config/config.php";
include "../../../../libraries/check_fileType.php";

date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date="$d1$d2$d3$d4$d5$d6";
$date21="$d1-$d2-$d3 $d4:$d5:$d6";
$time = "$d4:$d5:$d6";
$setDB=$_POST["set_DB"];
$action=$_POST["set_Action"];
$ar_category1=$_POST["ar_category1"];
// $ar_category2=$_POST["ar_category2"];
$setDBType=$_POST["set_DBType"];
$data1=$_POST["title1"];
$data2=$_POST["title2"];
$data3=$_POST["title3"];
$data4=$_POST["title4"];
$data5=$_POST["title5"];
$data6=$_POST["title6"];
$user = $_SESSION["user_id"];
// $data66=$_POST["title7"];
$data7=$_POST["message"];
$data8=$_POST["message2"];
$pic=$_FILES['file1']['name'];
$dataF=CheckImage($_FILES['file1']['type']);
if($data7=="")
{
	echo "<script language=\"JavaScript\">alert('คำเตือน : รายละเอียด Detail TH  มีค่าว่างค่ะ');</script>";	
	echo "<script language='JavaScript' type='text/javascript'> window.parent.message1Focus();</script>"; 
}
else if($data8=="")
{
	echo "<script language=\"JavaScript\">alert('คำเตือน : รายละเอียด Detail EN มีค่าว่างค่ะ');</script>";	
	echo "<script language='JavaScript' type='text/javascript'> window.parent.message2Focus();</script>"; 
}
if($data7!="" && $data8!=="")
{
	if($action=="addArticle")
	{
		if($pic!="")
		{
			if($dataF=="true")
			{
				$pic1=setImageCharactorType($pic);
				$temp1="../../../../../img_upload/img_new/".$date."-".$pic1[1];
				$temp2="img_upload/img_new/".$date."-".$pic1[1];

				$sql="insert into news(cate,titleTH,titleEN,key_TH,key_EN,descriptionTH,descriptionEN,detailTH,detailEN,con_year,con_month,con_day,con_time,con_img,con_show,con_modified,useradd) value('$ar_category1','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$d3','$d2','$d1','$time','$temp2','1','$date21','$user')";

				$qry=mysql_query($sql);
				if(!$qry){echo "<script language=\"JavaScript\">alert('SQL ERROR');</script>";	}
				else
				{
					$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
					echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเรียบร้อย');</script>";	
					echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
				}
								//echo $sql;*/

			}
			else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ .gif .png .jpeg หรือ .jpg เท่านั้น');</script>";}
		}
		else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ  .gif .png .jpeg หรือ .jpg เท่านั้น');</script>";}

	}

}

	
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">