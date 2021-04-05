<? 

include "../../../config/connect/connect.php";
$select_id=$_REQUEST['select_id'];
$result=$_REQUEST['result'];
?>

<? if($result=='ar_category2'){ 
	$rstTemp1=mysql_query("select * from tb_brand where tb_brand.cat_id='".$select_id."' Order By brand_id ASC");
	$num11=mysql_num_rows($rstTemp1);
	if($num11!=0 || $num11!=""){
	while($arr_3=mysql_fetch_array($rstTemp1)){
?>
	<option value="<?=$arr_3['brand_id']?>"> - <?=$arr_3['brand_name_th']?></option>
<? } } else if($num11==0 || $num11==""){ ?>
	<option value=""> - ไม่มียี่ห้อสินค้า</option>
<? } }?> 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">