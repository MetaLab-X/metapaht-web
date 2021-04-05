<?php
session_start();
include "../../../../libraries/config/config.php";
include "../../../../libraries/check_fileType.php";
$view1=$_REQUEST['delID'];
$action=$_REQUEST["action"];
if($action=="DelList")
{
	$fetImg=mysql_fetch_array(mysql_query("select con_img from news where id='$view1'"));
	$check=mysql_query("delete from news where id='$view1'");
	if($check){
		unlink("../../../../../".$fetImg['con_img']);
		echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; 
	}
}

?>