<?
		session_start();
		if($_SESSION["kaset_userType"]!="" || $_SESSION["kaset_userType"]=="admin" || $_SESSION["kaset_userType"]=="user"){
		
			$db1="user_member";
			include "../../config/connect/connect.php";
			$action=$_REQUEST['action'];
			$MemberId=$_REQUEST['MemberId'];
			if($MemberId!="")
			{
				$qry=mysql_query("update $db1 set member_status='1' where member_id='$MemberId'");
				if($qry)
				{
					echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";	
				}
				else if(!$qry)
				{
					echo "<script language=\"JavaScript\">alert('Accept Member Error');</script>";	 	
				}
			}
		}
		
		
?>