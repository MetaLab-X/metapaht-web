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
			'data_id' => array(1,2,3,4,5,6,7),
			'labels' => array('ร้านที่ 1','ร้านที่ 2','ร้านที่ 3','ร้านที่ 4','ร้านที่ 5','ร้านที่ 6','ร้านที่ 7'),
			'data' => array(100, 200, 10, 500, 180, 300, 450)
	);  
	
}else {
	
	 $data = array(
			'id' => '1',
			'data_id' => array(1,2,3,4,5,6,7),
			'labels' => array('ร้านที่ 1','ร้านที่ 2','ร้านที่ 3','ร้านที่ 4','ร้านที่ 5','ร้านที่ 6','ร้านที่ 7'),
			'data' => array(100, 200, 10, 500, 180, 300, 450)
	); 
	
}

echo json_encode($data);
?>
