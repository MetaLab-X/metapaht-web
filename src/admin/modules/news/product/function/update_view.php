<?php
session_start();
$db1="news";
include "../../../../libraries/config/config.php";
include "../../../../libraries/check_fileType.php";
$action=$_REQUEST['action'];
if($action=="setShow")
{
	$id=$_REQUEST['setID'];
	$setOff=$_REQUEST['setOff'];	
	if($setOff=="true")
	{
		$qry=mysql_query("update $db1 set con_show='0' where id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
	else if($setOff=="false")
	{
		$qry=mysql_query("update $db1 set con_show='1' where id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
}

else if($action=="setBest")
{
	$id=$_REQUEST['setID'];
	$setOff=$_REQUEST['setOff'];	
	if($setOff=="true")
	{
		$qry=mysql_query("update $db1 set product_bestsale='0' where product_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
	else if($setOff=="false")
	{
		$qry=mysql_query("update $db1 set product_bestsale='1' where product_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
}


else if($action=="setPin")
{
	$id=$_REQUEST['setID'];
	$setOff=$_REQUEST['setOff'];	
	if($setOff=="true")
	{
		$qry=mysql_query("update $db1 set ar_pin='0' where ar_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
	else if($setOff=="false")
	{
		$qry=mysql_query("update $db1 set ar_pin='1' where ar_id='$id'");
		if($qry){echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }
	}
}




?>