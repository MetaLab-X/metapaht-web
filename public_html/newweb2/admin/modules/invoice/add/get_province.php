<? include "../../../libraries/config/config.php";
$select_id=$_REQUEST['select_id'];
$result=$_REQUEST['result'];
 if($result=='txt4'){ 
	
	$fet1=mysql_fetch_array(mysql_query("select * from tb_customer where customer_id='".$select_id."'"));
	if($fet1['DISTRICT_ID']!="0")
	{
		$sql="select * from tb_customer, province, amphur, district
where tb_customer.PROVINCE_ID=province.PROVINCE_ID
and tb_customer.AMPHUR_ID=amphur.AMPHUR_ID
and tb_customer.DISTRICT_ID=district.DISTRICT_ID
and tb_customer.customer_id='".$select_id."'";
$rstTemp1=mysql_query($sql);
	$arr_3=mysql_fetch_array($rstTemp1);
	echo trim(preg_replace('/\s\s+/', ' ', $arr_3['customer_address']))." ".$arr_3['DISTRICT_NAME']." ".$arr_3['AMPHUR_NAME']." ".$arr_3['PROVINCE_NAME']." ".$arr_3['POSTCODE']." ".$arr_3['customer_tel'];
	}
	else 
	{
		$sql="select * from tb_customer, province, amphur, district
where tb_customer.PROVINCE_ID=province.PROVINCE_ID
and tb_customer.AMPHUR_ID=amphur.AMPHUR_ID
and tb_customer.customer_id='".$select_id."'";
$rstTemp1=mysql_query($sql);
	$arr_3=mysql_fetch_array($rstTemp1);
	echo trim(preg_replace('/\s\s+/', ' ', $arr_3['customer_address']))." ".$arr_3['AMPHUR_NAME']." ".$arr_3['PROVINCE_NAME']." ".$arr_3['POSTCODE']." ".$arr_3['customer_tel'];
	}	
 }
 else if($result=='position')
 { 
	$sql="select tb_position.po_name from tb_employee, tb_position
where tb_employee.employee_position=tb_position.po_id
and tb_employee.employee_id='$select_id'";
	$fet=mysql_fetch_array(mysql_query($sql));
	echo $fet['po_name'];
	
 }
 
 ?>
