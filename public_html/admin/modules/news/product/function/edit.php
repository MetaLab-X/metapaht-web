<?php
session_start();
include "../../../../libraries/config/config.php";
include "../../../../libraries/check_fileType.php";
$user_add=$_SESSION["user_id"];
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
	//$ar_category2=$_POST["ar_category2"];
$setDBType=$_POST["set_DBType"];
$data1=$_POST["title1"];
$data2=$_POST["title2"];
$data3=$_POST["title3"];
$data4=$_POST["title4"];
$data5=$_POST["title5"];
$data6=$_POST["title6"];
//$data66=$_POST["title7"];
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
	if($action=="add")
	{
		if($pic!="")
		{
			if($dataF=="true")
			{
				$pic=setImageCharactorType($pic);
				$temp1="../../../../../img_upload/img_product/".$date."-".$pic[1];
				$temp2="img_upload/img_product/".$date."-".$pic[1];

								/*$sql="insert into $setDB values('','$setDBType','$ar_category','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$temp2','1','1','$user_add','$d1','$d2','$d3')";
								*/
								echo $sql;
								
								$qry=mysql_query($sql);
								if(!$qry){echo "<script language=\"JavaScript\">alert('SQL ERROR');</script>";	}
								else
								{
									$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
									echo "<script language=\"JavaScript\">alert('เพิ่มข้อมูลเรียบร้อย');</script>";	
									echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
								}
								//echo $sql;
								
							}
							else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ .gif .png .jpeg หรือ .jpg เท่านั้น');</script>";}
						}
						else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ  .gif .png .jpeg หรือ .jpg เท่านั้น');</script>";}

					}

					if($action=="editArticle")
					{
						$E_ID=$_POST['set_EID'];
						if($pic!="")
						{
							if($dataF=="true")
							{
								$pic1=setImageCharactorType($pic);
								$temp1="../../../../../img_upload/img_new/".$date."-".$pic1[1];
								$temp2="img_upload/img_new/".$date."-".$pic1[1];
								$fetImg=mysql_fetch_array(mysql_query("select  con_img from  news  where id='$E_ID'"));
								$sql1="update news set con_img='$temp2' where id='$E_ID'";
								$qry1=mysql_query($sql1);
								if(!$qry1){
										echo "<script language=\"JavaScript\">alert('SQL ERROR');</script>";	
									}
								else{
									$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
									unlink("../../../../../".$fetImg['con_img']);
								if(!$ict){echo "<script language=\"JavaScript\">alert('Upload IMG ERROR');</script>";	}
								}
							}else{echo "<script language=\"JavaScript\">alert('คำเตือน : อัพโหลดไฟล์รูปภาพ .gif .png .jpeg หรือ .jpg เท่านั้น');</script>";}
						}
						$sql="update news set 
						cate='$ar_category1',
						titleTH='$data1',
						titleEN='$data2',
						key_TH='$data3',
						key_EN='$data4',
						descriptionTH='$data5',
						descriptionEN='$data6',
						detailTH='$data7',
						detailEN='$data8',
						con_year='$d3',
						con_month='$d2',
						con_day='$d1',
						con_time='$time',
						con_modified ='$date21'
						where id='$E_ID'";
						$qry2=mysql_query($sql);
						if(!$qry2){echo "<script language=\"JavaScript\">alert('SQL ERROR');</script>";	}
						else 
						{
							echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเรียบร้อย');</script>";	
							echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
						}
					}	
				}
	/*
	
	if($action=="addArticle")
			{
					if($pic!="")
					{ 
						if($dataF=="true")
							{
								$temp1="../../../img_upload/img_slide/".$date."-".$pic;
								$temp2="img_upload/img_slide/".$date."-".$pic;
								$temp2= iconv('UTF-8', 'TIS-620',$temp2);
								$PointSlide=mysql_fetch_array(mysql_query("select * from $data1 order by slide_id desc"));
								$PointSlides=$PointSlide['slide_point'];
								if($PointSlides==0 || $PointSlides==""){$PointSlides=1;}
								else {$PointSlides=$PointSlides+1;}
								echo "insert into $data1 values('','$data2','$temp2','$data3','$data4','$data5','$PointSlides','1')";
								$qry=mysql_query("insert into $data1 values('','$data2','$temp2','$data3','$data4','$data5','$PointSlides','1')");
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
	/*	else if($action=="EditSlide")
		{
				if($pic!=""){
						if($dataF=="true")
							{
								$temp1="../../../img_upload/img_slide/".$date."-".$pic;
								$temp2="img_upload/img_slide/".$date."-".$pic;
								$temp2= iconv('UTF-8', 'TIS-620',$temp2);
								$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
								$qry=mysql_query("update $data1 set slide_imgs='$temp2' where slide_id='$slideID'");
							}
					}
				$sql="update $data1 set slide_th='$data3',slide_en='$data4',slide_link='$data5' where slide_id='$slideID'";
				$qry=mysql_query($sql);
				if($qry){	echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเรียบร้อย');</script>";	 	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
			}*/

			?>
			<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">