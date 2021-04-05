<? include "../../../libraries/config/config.php";
$select_id=$_REQUEST['select_id'];
$result=$_REQUEST['result'];
 if($result=='txt4'){ 
	$sql="select * from tb_customer, province, amphur, district
where tb_customer.PROVINCE_ID=province.PROVINCE_ID
and tb_customer.AMPHUR_ID=amphur.AMPHUR_ID
and tb_customer.DISTRICT_ID=district.DISTRICT_ID
and tb_customer.customer_id='".$select_id."'";

$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		from tb_customer as t2 where t2.customer_id='".$select_id."'";

	$rstTemp1=mysql_query($sql);
	$arr_3=mysql_fetch_array($rstTemp1);
	echo $arr_3['customer_address']." ".$arr_3['DISTRICT_NAME']." ".$arr_3['AMPHUR_NAME']." ".$arr_3['PROVINCE_NAME']." ".$arr_3['POSTCODE']." ".$arr_3['customer_tel'];
	
 }
  if($result=='txt9'){ 
	$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		
		from tb_customer as t2 where t2.customer_id='".$select_id."'";
	$rstTemp1=mysql_query($sql);
	$arr_3=mysql_fetch_array($rstTemp1);
	echo $arr_3['customer_address']." ".$arr_3['DISTRICT_NAME']." ".$arr_3['AMPHUR_NAME']." ".$arr_3['PROVINCE_NAME']." ".$arr_3['POSTCODE']." ".$arr_3['customer_tel'];
	
 }?>
