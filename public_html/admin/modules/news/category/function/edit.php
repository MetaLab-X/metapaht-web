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


$data2=$_POST["set_ID1"];
$action=$_POST["set_Action1"];
$datas1=$_POST["title11"];
$datas2=$_POST["title12"];
$datas3=$_POST["title13"];
$datas4=$_POST["title14"];
$datas5=$_POST["title15"];
$datas6=$_POST["title16"];
$datas7=$_FILES['title17']['name'];
$dataF=CheckImage($_FILES['title17']['type']);

if($action=="EditCategory"){
	if($datas7!=""){
		if($dataF!="true"){ echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ .png, .GIF, .jpeg หรือ .jpg เท่านั้น');</script>";}
		else if($dataF=="true"){
			$img=setImageCharactorType($datas7);
			$temp1="../../../../../img_upload/img_brand/".$date."-".$img;
			$temp2="img_brand/".$date."-".$img;
			echo $temp1;
			$sql1="update news_cate SET cate_img='$temp2' where cate_id='$data2'";
			$qry1=mysql_query($sql1);
			if($qry1){$ict=move_uploaded_file($_FILES["title17"]["tmp_name"],$temp1);}
		}
	}
	$sql="update news_cate SET 		
	cate_nameTH='$datas1',
	cate_nameEN='$datas2',
	cate_keywordTH='$datas3',
	cate_keywordEN='$datas4',
	descriptionTH='$datas5',
	descriptionEN='$datas6',
	cate_modified='$date21'
	where cate_id='$data2'";

	$qry=mysql_query($sql);
	if(!$qry){
		echo "<script language=\"JavaScript\">alert('การบันทึกข้อมูล Error / Sql Error');</script>";
	}
	else if($qry){
		echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเรียบร้อย');</script>";	
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
	}
}
/*------------------------------------------------------------------------------------------------------------------*/
?>