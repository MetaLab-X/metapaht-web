<?php
	function get_positionList()
{
	$data="";
	$sql="SELECT * FROM tb_position";
	$qry=mysql_query($sql);
	$numRow=mysql_num_rows($qry);
	$data[0][0]=$numRow;
	$round=1;
	while($fet=mysql_fetch_array($qry))
	{
		$data[$round][1]=$fet['po_id'];
		$data[$round][2]=$fet['po_name'];
		$round=$round+1;
	}
	return $data;
}
?>