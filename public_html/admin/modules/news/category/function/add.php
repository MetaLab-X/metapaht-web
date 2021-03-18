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
$user = $_SESSION["userName"];

$date="$d1$d2$d3$d4$d5$d6";
$date21="$d1-$d2-$d3 $d4:$d5:$d6";

$data1="news_cate";
	// $data2=$_POST["set_ID"];
	// $slideID=$_REQUEST["slide_ID"];
$action=$_POST["set_Action"];
$datas1=$_POST["title1"];
$datas2=$_POST["title2"];
$datas3=$_POST["title3"];
$datas4=$_POST["title4"];
$datas5=$_POST["title5"];
$datas6=$_POST["title6"];
$datas7=$_FILES['title7']['name'];
$dataF=CheckImage($_FILES['title7']['type']);

if($action=="AddCategory"){
	if($datas7==""){
		echo "<script language=\"JavaScript\">alert('คำเตือน : กรุณาเลือกรูปภาพด้วยค่ะ');</script>";
	}
	else if($datas7!=""){
		if($dataF!="true"){ echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ .png, .GIF, .jpeg หรือ .jpg เท่านั้น');</script>";}
		else if($dataF=="true"){
			$img=setImageCharactorType($datas7);
			$temp1="../../../../../img_upload/img_brand/".$date."-".$img;
			$temp2="img_brand/".$date."-".$img;
			$sql="insert into $data1 (cate_nameTH,cate_nameEN,cate_keywordTH,cate_keywordEN,descriptionTH,descriptionEN,cate_show,added,cate_img,cate_modified,useradd)
			VALUES('$datas1','$datas2','$datas3','$datas4','$datas5','$datas6','1','$date21','$temp2','$date21','$user')";
			$qry=mysql_query($sql);
			if(!$qry){
				echo "<script language=\"JavaScript\">alert('การบันทึกข้อมูล Error / Sql Error');</script>";
			}
			else if($qry){
				$ict=move_uploaded_file($_FILES["title7"]["tmp_name"],$temp1);
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเรียบร้อย');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
			}
		}
	}
}
/*------------------------------------------------------------------------------------------------------------------*/
?>