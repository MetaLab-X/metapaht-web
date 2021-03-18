<?php
function Get_ValueSlide($id)
{
	$sql="select * from tb_setting_index where st_id='$id'";
	$i=1;
	$fetData=mysql_fetch_array(mysql_query($sql));
	$data[$i][1]=$fetData['st_id'];
	$data[$i][2]=$fetData['st_text_bt'];
	$data[$i][3]=$fetData['st_text_st'];
	$data[$i][4]=$fetData['st_text_b'];
	$data[$i][5]=$fetData['st_text_s'];
	$data[$i][6]=$fetData['st_img'];
	return $data;
}
?>