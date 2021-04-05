<?
		session_start();
		include "../../libraries/config/config.php";
		$user_add=$_SESSION["user_id"];
		$action=$_REQUEST['action'];
		$db1=$_POST['dbL'];
		$eID=$_POST['eID'];
			$d1=date("d");
		$d2=date("m");
		$d3=date("Y");
		
		$d4=date("H")-1;
		$d5=date("i");
		$d6=date("s");
		$date="$d1/$d2/$d3 $d4:$d5:$d6";
		$date1="$d1$d2$d3$d4$d5$d6";
		
			$nameTh=$_POST['txt1'];
			$nameEn=$_POST['txt2'];
			$message=$_POST['message'];
			$message2=$_POST['message2'];
		if($action=="edit")
		{
			if($message==""){
					echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถบันทึกได้ กรุณากรอกข้อมูล เนื้อหา : Thai ด้วยค่ะ');</script>";
					echo "<script language='JavaScript' type='text/javascript'>window.parent.controlpanel1();</script>";
			}
			else if($message==""){
					echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถบันทึกได้ กรุณากรอกข้อมูล เนื้อหา : Eng ด้วยค่ะ');</script>";
					echo "<script language='JavaScript' type='text/javascript'>window.parent.controlpanel2();</script>";
			}
			else if($message!="" && $message2!="")
			{
				$sql="update $db1 set name_th='$nameTh',name_en='$nameEn', detail_th='$message',detail_en='$message2',addby='$user_add',addate='$date' where id='$eID'";
				$check=mysql_query($sql);
			if($check){ 
				echo "<script language=\"JavaScript\">alert('แก้ไขข้อมูลเสร็จสมบูรณ์');</script>";	 
				echo "<script language='JavaScript' type='text/javascript'> window.parent.controlpanel();</script>"; 
			}
			else{ echo "<script language=\"JavaScript\">alert('update Error !!!!');</script>";	 }
			}
		}
		//=========================================================================
		//=========================================================================
		//=========================================================================
		else if($action=="")
		{
			
		}
		//=========================================================================
		//=========================================================================
		//=========================================================================
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">