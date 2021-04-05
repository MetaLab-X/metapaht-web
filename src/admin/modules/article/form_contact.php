<?
		session_start();
		include "../../config/connect/connect.php";
			$user_add=$_SESSION["nel_id1"];
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
		
			$message=$_POST['message'];
			$message2=$_POST['message2'];
		if($action=="edit")
		{
			if($message==""){echo "<script language=\"JavaScript\">alert('ไม่สามารถบันทึกได้ เพราะข้อมูล TH มีค่าว่าง');</script>";
			echo "<script language='JavaScript' type='text/javascript'>window.parent.controlpanel1();</script>";
			}
			else if($message2==""){echo "<script language=\"JavaScript\">alert('ไม่สามารถบันทึกได้ เพราะข้อมูล EN มีค่าว่าง');</script>";
			echo "<script language='JavaScript' type='text/javascript'>window.parent.controlpanel2();</script>";
			}
			else if($message!="" && $message2!="")
			{
				$sql="update $db1 set detail_th='$message',detail_en='$message2',addby='$user_add',addate='$date' where id='$eID'";
				echo $sql;
				$check=mysql_query($sql);
				if($check){ 
						echo "<script language=\"JavaScript\">alert('update Complete');</script>";	 
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
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">