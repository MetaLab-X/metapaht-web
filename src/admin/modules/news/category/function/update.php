<?php
session_start();
$db1="news_cate";
include "../../../../libraries/config/config.php";
$action=$_REQUEST['action'];
if($action=="setShow")
{
	$id=$_REQUEST['setID'];
	$setOff=$_REQUEST['setOff'];	
	if($setOff=="true")
	{
		$qry=mysql_query("update $db1 set cate_show='0' where cate_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
	else if($setOff=="false")
	{
		$qry=mysql_query("update $db1 set cate_show='1' where cate_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
}
// else if($action=="setpoint")
// {
// 	$id1=$_REQUEST['setID'];
// 	$id2=$_REQUEST['setID2'];

// 	$fetPoint1=mysql_fetch_array(mysql_query("select * from $db1 where prod_id='$id1'"));
// 	$fetPoint2=mysql_fetch_array(mysql_query("select * from $db1 where prod_id='$id2'"));

// 	$point1=$fetPoint1['prod_point'];
// 	$point2=$fetPoint2['prod_point'];

// 	mysql_query("update $db1 set prod_point='$point2' where prod_id='$id1'");
// 	mysql_query("update $db1 set prod_point='$point1' where prod_id='$id2'");

// 	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>";
// }




?>