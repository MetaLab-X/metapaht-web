<?
		session_start();
		include "../../../libraries/config/config.php";
		$view1=$_REQUEST['delID'];
		$type=$_REQUEST['shopType'];
		
		if($type=="Child")
		{
			$check=mysql_query("delete from tb_customer where customer_id='$view1'");
			$check2=mysql_query("delete from tb_zone_customer where customer_id='$view1'");
			if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		}
		if($type=="Main")
		{
			$check=mysql_query("delete from tb_customer where customer_id='$view1'");
			$check2=mysql_query("delete from tb_customer where child_of_id='$view1'");
			$check3=mysql_query("delete from tb_zone_customer where customer_id='$view1'");
			if($check2){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		}
		
		
?>