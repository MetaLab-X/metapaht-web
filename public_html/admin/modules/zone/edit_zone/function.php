<?
	function get_Zonedata($id)
	{
		$data="";
		$sql="select * from tb_zone where zone_id='$id'";
		$qry=mysql_query($sql);
		$fet=mysql_fetch_array($qry);
		$data[1]=$fet['zone_id'];
		$data[2]=$fet['zone_name'];
		$data[3]=$fet['add_by'];
		$data[4]=$fet['add_date'];
		return $data;
	}
?>