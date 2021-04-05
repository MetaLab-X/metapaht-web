<?
include "../../libraries/config/config.php";
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");


$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];
$emp_id = $_POST['emp_id'];

$sql = "";
$qry = mysql_query($sql);


if (mysql_num_rows($qry)){
	$d = mysql_fetch_array($qry);
	
	$data = array(
			'id' => '1',
			'data_id' => array(1,2),
			'labels' => array('ลูกค้าใหม่','เป้าหมาย'),
			'data' => array(30, 70)
	);  
	
}else {
	
	 $data = array(
			'id' => '1',
			'data_id' => array(1,2),
			'labels' => array('ลูกค้าใหม่','เป้าหมาย'),
			'data' => array(30, 70)
	); 
	
}

echo json_encode($data);
?>
