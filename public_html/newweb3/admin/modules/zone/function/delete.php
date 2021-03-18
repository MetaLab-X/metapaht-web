<?
		session_start();
		include "../../../libraries/config/config.php";
		$view1=$_REQUEST['delID'];
		$check=mysql_query("delete from tb_zone where zone_id='$view1'");
		$check2=mysql_query("delete from tb_zone_employee where zone_id='$view1'");
		$check3=mysql_query("delete from tb_zone_province where zone_id='$view1'");
		if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		
		
?>