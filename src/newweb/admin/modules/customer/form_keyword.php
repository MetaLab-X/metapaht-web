<?php
	session_start();
	include "../../config/connect/connect.php";
	include "../../config/check_fileType.php";
	$d1=date("d");
	$d2=date("m");
	$d3=date("Y");
	$d4=date("H");
	$d5=date("i");
	$d6=date("s");
	$date="$d1$d2$d3$d4$d5$d6";
	$date21="$d1-$d2-$d3 $d4:$d5:$d6";
	
	$data1=$_POST["set_DB"];
	$data2=$_POST["set_ID"];
	$keyID=$_REQUEST["slide_ID"];
	$action=$_POST["set_Action"];
	$data3=$_POST["title1"];
	$data4=$_POST["title2"];
	$data5=$_POST["title3"];
	$pic=$_FILES['file1']['name'];
	$dataF=CheckImage($_FILES['file1']['type']);
		$user_add=$_SESSION["nel_id1"];
		if($action=="EditKey")
		{
				if($pic!=""){
						if($dataF=="true")
							{
								$temp1="../../../img_upload/img_title/".$date."-".$pic;
								$temp2="img_upload/img_title/".$date."-".$pic;
								$temp2= iconv('UTF-8', 'TIS-620',$temp2);
								$ict=move_uploaded_file($_FILES["file1"]["tmp_name"],$temp1);
								$qry=mysql_query("update $data1 set pic_fb='$temp2' where id='$keyID'");
							}
					}
				$sql="update $data1 set p_title='$data3',p_keyword='$data4',p_descrip='$data5',addBy='$user_add',addDate='$date21' where id='$keyID'";
				$qry=mysql_query($sql);
				if($qry){	echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเรียบร้อย');</script>";	 	
				echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		}
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">