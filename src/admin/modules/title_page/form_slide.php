<?php
session_start();
include "../../libraries/config/config.php";
include "../../libraries/check_fileType.php";
date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$d4=date("H");
$d5=date("i");
$d6=date("s");
$date="$d1$d2$d3$d4$d5$d6";
$date21="$d1-$d2-$d3 $d4:$d5:$d6";
$user = $_SESSION["userName"];
$data1=$_POST["set_DB"];
// $data2=$_POST["set_ID"];
$slideID=$_REQUEST["slide_ID"];
$action=$_POST["set_Action"];
$oldFile=$_POST["Pathfile"];
$data3=$_POST["title1"];
$data4=$_POST["title2"];
$data5=$_POST["title3"];
$data6=$_POST["title4"];
// $data7=$_POST["title5"];

$pic=$_FILES['file1']['name'];
$dataF=CheckImage($_FILES['file1']['type']);
if($action=="AddSlide")
{
	if($pic!="")
	{ 
		if($dataF=="true")
		{
			$temp1="../../../img_upload/img_slide/".$date."-".$pic;
			$temp2="img_upload/img_slide/".$date."-".$pic;
			$temp1 = iconv("tis-620", "utf-8", $temp1);
			$temp2 = iconv("tis-620", "utf-8", $temp2);
			
			
			$PointSlide=mysql_fetch_array(mysql_query("select * from slide order by id desc"));
			$PointSlides=$PointSlide['slide_order'];
			if($PointSlides==0 || $PointSlides==""){$PointSlides=1;}
			else {$PointSlides=$PointSlides+1;}


			$qry=mysql_query("insert into slide(image_slide,titleTH,titleEN,url,slide_order,slide_view,useradd) values('$temp2','$data3','$data4','$data5','$PointSlides','1','$user')");

			if(!$qry){echo "<script language=\"JavaScript\">alert('SQL ERROR');</script>";	}
			else
			{
				$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
				echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเรียบร้อย');</script>";	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
			}

		}
		else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพเท่านั้น');</script>";}
	}
	else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพเท่านั้น');</script>";}
}
/*------------------------------------------------------------------------------------------------------------------*/
else if($action=="EditSlide")
{
	if($pic!=""){
		if($dataF=="true")
		{
			$pic1=setImageCharactorType($pic);
			$temp1="../../../img_upload/img_slide/".$date."-".$pic1;
			$temp2="img_upload/img_slide/".$date."-".$pic;
			
			$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
			if($ict){
				unlink("../../../".$oldFile);
			}
			
			$qry=mysql_query("update $data1 set st_img='$temp2' where st_id='$slideID'");
		}
	}
	$sql="update $data1 set 
	st_text_bt='$data3',
	st_text_st='$data5',
	st_text_b='$data4',
	st_text_s='$data6',
	add_by='$user',
	add_date='$date21'
	where st_id='$slideID'";
	$qry=mysql_query($sql);
	if($qry){	echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเรียบร้อย');</script>";	 	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
}

?>