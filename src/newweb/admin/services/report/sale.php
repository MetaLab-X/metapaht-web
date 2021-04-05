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
	
	 for($i = 0 ; $i <= 5 ; $i++){
		$data [] = array(
			'id' => $i,
			'data_id' => $i,
			'labels' => 'ผอ.กุ้ง '.$i,
			'type' =>"parent",
			'main_1' => 1 * $i,
			'child_1' => 1 * $i ,
			'new_1' => 1 * $i,
			'sum_1' => 3 * $i,
			'main_2' => 1 * $i,
			'child_2' => 1 * $i ,
			'new_2' => 1 * $i,
			'sum_2' => 3 * $i,
			'main_3' => 1 * $i,
			'child_3' => 1 * $i ,
			'new_3' => 1 * $i,
			'sum_3' => 3 * $i,
		); 
		
		for($j = 1 ; $j <= 5 ; $j++){
			$data [] = array(
				'id' => $i*5+$j,
				'data_id' => $j,
				'labels' => 'ผอ.กุ้ง '.$j,
				'type' =>"child",
				'main_1' => 1 * $j,
				'child_1' => 1 * $j ,
				'new_1' => 1 * $j,
				'sum_1' => 3 * $j,
				'main_2' => 1 * $j,
				'child_2' => 1 * $j ,
				'new_2' => 1 * $j,
				'sum_2' => 3 * $j,
				'main_3' => 1 * $j,
				'child_3' => 1 * $j ,
				'new_3' => 1 * $j,
				'sum_3' => 3 * $j,
			); 
			
			for($k = 1 ; $k <= 5 ; $k++){
				$data [] = array(
					'id' => $i*5+$j*5+$k,
					'data_id' => $k,
					'labels' => 'ผอ.กุ้ง '.$k,
					'type' =>"node",
					'main_1' => 1 * $k,
					'child_1' => 1 * $k ,
					'new_1' => 1 * $k,
					'sum_1' => 3 * $k,
					'main_2' => 1 * $k,
					'child_2' => 1 * $k ,
					'new_2' => 1 * $k,
					'sum_2' => 3 * $k,
					'main_3' => 1 * $k,
					'child_3' => 1 * $k ,
					'new_3' => 1 * $k,
					'sum_3' => 3 * $k,
				); 	
			}
			
		}
		
		
		
	}
	
}else {
	
	for($i = 0 ; $i <= 5 ; $i++){
		$data [] = array(
			'id' => $i,
			'data_id' => $i,
			'labels' => 'ผอ.กุ้ง '.$i,
			'type' =>"parent",
			'main_1' => 1 * $i,
			'child_1' => 1 * $i ,
			'new_1' => 1 * $i,
			'sum_1' => 3 * $i,
			'main_2' => 1 * $i,
			'child_2' => 1 * $i ,
			'new_2' => 1 * $i,
			'sum_2' => 3 * $i,
			'main_3' => 1 * $i,
			'child_3' => 1 * $i ,
			'new_3' => 1 * $i,
			'sum_3' => 3 * $i,
		); 
		
		for($j = 0 ; $j <= 5 ; $j++){
			$data [] = array(
				'id' => $i+$j,
				'data_id' => $j,
				'labels' => 'ผอ.กุ้ง '.$j,
				'type' =>"child",
				'main_1' => 1 * $j,
				'child_1' => 1 * $j ,
				'new_1' => 1 * $j,
				'sum_1' => 3 * $j,
				'main_2' => 1 * $j,
				'child_2' => 1 * $j ,
				'new_2' => 1 * $j,
				'sum_2' => 3 * $j,
				'main_3' => 1 * $j,
				'child_3' => 1 * $j ,
				'new_3' => 1 * $j,
				'sum_3' => 3 * $j,
			); 
			
			for($k = 0 ; $k <= 5 ; $k++){
				$data [] = array(
					'id' => $i+$j+$k,
					'data_id' => $k,
					'labels' => 'ผอ.กุ้ง '.$k,
					'type' =>"node",
					'main_1' => 1 * $k,
					'child_1' => 1 * $k ,
					'new_1' => 1 * $k,
					'sum_1' => 3 * $k,
					'main_2' => 1 * $k,
					'child_2' => 1 * $k ,
					'new_2' => 1 * $k,
					'sum_2' => 3 * $k,
					'main_3' => 1 * $k,
					'child_3' => 1 * $k ,
					'new_3' => 1 * $k,
					'sum_3' => 3 * $k,
				); 	
			}
			
		}	
	}
}

echo json_encode($data);

?>
