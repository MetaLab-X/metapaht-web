<?
		session_start();
		include "../../config/connect/connect.php";
		$view1=$_REQUEST['delID'];
		$check=mysql_query("delete from user_member where member_id='$view1'");
		if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		
		
?>