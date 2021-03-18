<?
include "../../libraries/config/config.php";
header('Access-Control-Allow-Origin: *');  
header("Access-Control-Allow-Methods: *");
header("Content-Type: application/json; charset=UTF-8");
$setMont="";
$setSumSale="";
$monts = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");


$date_start = $_GET['date_start'];
$date_end = $_GET['date_end'];
$before_year = $_GET['before_year'];
$emp_id = $_POST['emp_id'];

if($date_start!="")
{
	$date1=explode("-",$date_start);
}
if($date_end!="")
{
	$date2=explode("-",$date_end);
}
if($before_year==""){$before_year=0;}


//SET MONT
$numMont=intval($date2[1]);
for($i=0;$i<$date2[1];$i++){$setMont[$i]=$monts[$i];}

//select DATA INVOINCE
$beginyear=$date2[2]-$before_year;
for($i=0;$i<=$before_year;$i++)
{
	$year=$date2[2]-$i;
	for($j=1;$j<=$date2[1];$j++)
	{
		$sql="";
		$month=$j;
		$setDate=$month."-".$year;
		$sql="SELECT SUM(tb_invoice_detail.qty) AS SumSale from tb_invoice, tb_invoice_detail where tb_invoice.invoice_id=tb_invoice_detail.invoice_id and tb_invoice.invoice_date like '%$setDate%'";
		$qry=mysql_query($sql);
		$getvalue=mysql_fetch_array($qry);
		$setSumSale[$i][$j]=$getvalue['SumSale'];
		if($setSumSale[$i][$j]==""){$setSumSale[$i][$j]=0;}
	}
}

$year =array();
for ($i=0;$i<=$before_year;$i++){
	$setYear=$date2[2]-$i;
	$year[] = array( 'label' => $setYear ,'data' => $setSumSale[$i]);
}
	


$sql = "select * from tb_invoice where tb_invoice.invoice_date BETWEEN '$date_start' and '$date_end' ORDER BY tb_invoice.invoice_date ASC";
$qry = mysql_query($sql);


if (mysql_num_rows($qry)){
	$d = mysql_fetch_array($qry);
	$data = array(
			'id' => '1',
			'graph' => $year
			,
			'labels' => $setMont
	); 
	
	
}else {
	
	 $data = array(
			'id' => '1',
			'graph' => array(
				array(
					'label'=>'ปัจจุบัน',
					'data'=>array(99, 59, 80, 81, 56, 55, 40)
				),
				array(
					'label'=>'ย้อนหลัง 1 ปี',
					'data'=>array(28, 48, 40, 19, 86, 27, 90)
				)
			),
			'labels' => $setMont
	); 
	
}
echo json_encode($data);

/*echo "<pre>";
print_r($data);
echo "</pre>";*/
?>
