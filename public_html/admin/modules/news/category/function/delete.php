<?php
session_start();
include "../../../../libraries/config/config.php";
$view1=$_REQUEST['delID'];
$fetImg=mysql_fetch_array(mysql_query("select cate_img from news_cate where cate_id='$view1'"));
$check=mysql_query("delete  from news_cate where cate_id='$view1'");
if($check){
	unlink("../../../../../img_upload/".$fetImg['cate_img']);
	$sql="select id, con_img from news where cate='$view1' order by id asc";
	$qry=mysql_query($sql);
	while($fet=mysql_fetch_array($qry)){
		$id=$fet['id'];
		$img=$fet['con_img'];
		$qry1=mysql_query("delete from news where id='$id'");
		if($qry1){unlink("../../../../../".$img);}
	}
	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPage();</script>"; }


?>