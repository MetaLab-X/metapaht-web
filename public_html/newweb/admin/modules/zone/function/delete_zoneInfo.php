<?
		session_start();
		include "../../../libraries/config/config.php";
		$view1=$_REQUEST['delID'];
		
		//echo "delete from tb_zone_province where zonep_id='$view1'";
		$check=mysql_query("delete from tb_zone_province where zonep_id='$view1'");
		if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		
		
?>