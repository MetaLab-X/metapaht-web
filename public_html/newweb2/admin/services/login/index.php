<?
include "../../libraries/config/config.php";
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");

$emp_user = $_POST['emp_user'];
$emp_pass = $_POST['emp_pass'];


$sql = "SELECT * FROM tb_employee WHERE employee_email = '$emp_user' AND employee_password = '$emp_pass'";
$qry = mysql_query($sql);


if (mysql_num_rows($qry)){
	$d = mysql_fetch_array($qry);
	
	$data = array(
				'employee_id'=>$d['employee_id'],
				'employee_code'=>$d['employee_code'],
				'employee_name'=>$d['employee_name'],
				'employee_lastname'=>$d['employee_lastname'],
				'employee_address'=>$d['employee_address'],
				'employee_tel'=>$d['employee_tel'],
				'employee_email'=>$d['employee_email'],
				'employee_position'=>$d['employee_position'],
				'employee_type'=>$d['employee_type'],
				'employee_password'=>$d['employee_password'],
				'employee_img'=>$d['employee_img'],
				'lastupdate'=>$d['lastupdate'],
				'updateby'=>$d['updateby'],
				);
	
	
}else {
	$data = array(
				'employee_id'=>'',
				'employee_code'=>'',
				'employee_name'=>'',
				'employee_lastname'=>'',
				'employee_address'=>'',
				'employee_tel'=>'',
				'employee_email'=>'',
				'employee_position'=>'',
				'employee_type'=>'',
				'employee_password'=>'',
				'employee_img'=>'',
				'lastupdate'=>'',
				'updateby'=>'',
				);
	
}

echo json_encode($data);
?>
