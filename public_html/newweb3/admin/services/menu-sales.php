<?php
	include "../libraries/config/config.php";
	
	header('Access-Control-Allow-Origin: *');  
	header("Access-Control-Allow-Methods: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	$sql="select SUM(qry) As total_sale  from tb_invoice_detail";
	$qry=mysql_query($sql);
	$getValues=mysql_fetch_array($qry);
	$data = array(
			'total_sale'=>$getValues['total_sale'],
			'today_sale'=>$getValues['total_sale'],
			'new_customer'=>$getValues['total_sale']
				  );
	echo json_encode($data);
?>