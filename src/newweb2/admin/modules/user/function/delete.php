<?
		session_start();
		include "../../../libraries/config/config.php";
		$view1=$_REQUEST['delID'];
		$check=mysql_query("delete from tb_administrator where user_id='$view1'");
		if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		
		
?>