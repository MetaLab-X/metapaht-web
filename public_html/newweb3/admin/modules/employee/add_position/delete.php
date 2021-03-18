<?
		session_start();
		include "../../../libraries/config/config.php";
		$view1=$_REQUEST['delID'];
		
		if($view1=="0000000026" || $view1=="0000000027")
		{
			echo "<script language=\"JavaScript\">alert('คำเตือน : ไม่สามารถลบข้อมูลได้');</script>";	
		}
		else 
		{
			
			$check=mysql_query("delete from tb_position where po_id='$view1'");
			if($check){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
		}
		
		
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">