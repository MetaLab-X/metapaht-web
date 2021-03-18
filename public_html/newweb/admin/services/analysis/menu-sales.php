<?
include "../../libraries/config/config.php";
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");

$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$emp_id = $_POST['emp_id'];

date_default_timezone_set("Asia/Bangkok");
$d1=date("d");
$d2=date("m");
$d3=date("Y");
$dateCheckSale=$d1."-".$d2."-".$d3;
$dateCheckCustomer="-".$d2."-".$d3;


$sqlSaleAll = "SELECT SUM(tb_invoice_detail.qty) as SaleAll from tb_invoice, tb_invoice_detail where tb_invoice.invoice_id=tb_invoice_detail.invoice_id";
$qry = mysql_query($sqlSaleAll);

$sqlSale="SELECT SUM(tb_invoice_detail.qty) as SaleDay from tb_invoice, tb_invoice_detail 
where tb_invoice.invoice_id=tb_invoice_detail.invoice_id 
and tb_invoice.invoice_date LIKE '%$dateCheckSale%'";
$qrySale=mysql_query($sqlSale);

$sqlCustomer="SELECT COUNT(tb_customer.customer_id) AS Customer from tb_customer where tb_customer.regis_date LIKE '%$dateCheckCustomer%' ";
$qryCustomer=mysql_query($sqlCustomer);




if (mysql_num_rows($qry)){
	
	$fet1=mysql_fetch_array($qry);
	$fet2=mysql_fetch_array($qrySale);
	$fet3=mysql_fetch_array($qryCustomer);
	
	if($fet1['SaleAll']=="null" || $fet1['SaleAll']==""){$fet1['SaleAll']=0;}
	if($fet2['SaleDay']=="null" || $fet2['SaleDay']==""){$fet2['SaleDay']=0;}
	if($fet3['Customer']=="null" || $fet3['Customer']==""){$fet3['Customer']=0;}
	
	
	$data = array(
				'id'=>$emp_id,
				'total_sale'=>$fet1['SaleAll'],
				'today_sale'=>$fet2['SaleDay'],
				'new_customer'=>$fet3['Customer'],
				);
	
	
}else {
	$data = array(
				'id'=>'0',
				'total_sale'=>'0',
				'today_sale'=>'0',
				'new_customer'=>'0',
				);
	
}

echo json_encode($data);
?>
