<?php
session_start();
$db1="slide";
include "../../config/connect/connect.php";
$action=$_REQUEST['action'];
if($action=="setShow")
{
	$id=$_REQUEST['setID'];
	$setOff=$_REQUEST['setOff'];	
	if($setOff=="true")
	{
		$qry=mysql_query("update $db1 set slide_view='0' where id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
	else if($setOff=="false")
	{
		$qry=mysql_query("update $db1 set slide_view='1' where id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
}
else if($action=="setpoint")
{
	$id1=$_REQUEST['setID'];
	$id2=$_REQUEST['setID2'];

	$fetPoint1=mysql_fetch_array(mysql_query("select * from $db1 where id='$id1'"));
	$fetPoint2=mysql_fetch_array(mysql_query("select * from $db1 where id='$id2'"));

	$point1=$fetPoint1['slide_order'];
	$point2=$fetPoint2['slide_order'];

	mysql_query("update $db1 set slide_order='$point2' where id='$id1'");
	mysql_query("update $db1 set slide_order='$point1' where id='$id2'");

	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
}




?>