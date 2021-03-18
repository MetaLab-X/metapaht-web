<?
include "../../libraries/config/config.php";
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");


$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$emp_id = $_POST['emp_id'];

$sql = "SELECT tb_product.product_id, tb_product.product_name, tb_product_brand.product_brand_name, tb_product_type.product_type_name, SUM( tb_invoice_detail.qty ) AS SaleCount
FROM tb_product, tb_product_brand, tb_product_type, tb_invoice, tb_invoice_detail
WHERE tb_product.product_brand_id = tb_product_brand.product_brand_id
AND tb_product.product_type_id = tb_product_type.product_type_id
AND tb_product.product_id = tb_invoice_detail.product_id
AND tb_invoice.invoice_id = tb_invoice_detail.invoice_id
GROUP BY tb_product.product_name
ORDER BY SaleCount DESC";
$qry = mysql_query($sql);


if (mysql_num_rows($qry)){
	$d = mysql_fetch_array($qry);
	
	$data = array(
			'id' => '1',
			'data_id' => array(1,2,3,4,5,6,7),
			'labels' => array('ปรับปรุงดิน A','ปรับปรุงดิน B','ปรับปรุงดิน C','ปรับปรุงดิน D','ปรับปรุงดิน E','ปรับปรุงดิน F','ปรับปรุงดิน G'),
			'data' => array(100, 200, 10, 500, 180, 300, 450)
	);  
	
}else {
	
	 $data = array(
			'id' => '1',
			'data_id' => array(1,2,3,4,5,6,7),
			'labels' => array('ปรับปรุงดิน A','ปรับปรุงดิน B','ปรับปรุงดิน C','ปรับปรุงดิน D','ปรับปรุงดิน E','ปรับปรุงดิน F','ปรับปรุงดิน G'),
			'data' => array(100, 200, 10, 500, 180, 300, 450)
	); 
	
}

echo json_encode($data);
?>
