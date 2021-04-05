<? 

include "../../libraries/config/config.php";
$select_id=$_REQUEST['select_id'];
$result=$_REQUEST['result'];
?>

<? if($result=='text2'){ 
	$rstTemp1=mysql_query("select * from amphur Where PROVINCE_ID ='".$select_id."' Order By AMPHUR_NAME ASC");
	while($arr_3=mysql_fetch_array($rstTemp1)){
?>
	<option value="<?=$arr_3['AMPHUR_ID']?>"> - <?=$arr_3['AMPHUR_NAME']?></option>
<? }}?>

<? if($result=='text5'){ ?>
<select name='text5' id='text5'>
	<?
	$rstTemp=mysql_query("select * from district Where AMPHUR_ID ='".$select_id."'  Order By DISTRICT_ID ASC");
	while($arr_2=mysql_fetch_array($rstTemp)){
	?>
	<option value="<?=$arr_2['DISTRICT_ID']?>"> - <?=$arr_2['DISTRICT_NAME']?></option>
	<? }?>
</select>
<? }?>