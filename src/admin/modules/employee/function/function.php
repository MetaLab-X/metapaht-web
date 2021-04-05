<?php
	function employee_list($type,$sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		$sql="select * from tb_position, tb_employee where tb_position.po_id=tb_employee.employee_position ORDER by tb_position.po_id asc, tb_employee.employee_id";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['employee_id'];
			$data[$i][2]=$fet['employee_code'];
			$data[$i][3]=$fet['prename_id'];
			$data[$i][4]=$fet['employee_name']." ".$fet['employee_lastname']." [".$fet['employee_nickname']."]";
			$data[$i][6]=$fet['employee_address'];
			$data[$i][7]=$fet['employee_tel'];
			$data[$i][8]=$fet['employee_email'];
			$data[$i][9]=$fet['employee_position'];
			$data[$i][10]=$fet['employee_type'];
			$data[$i][11]=$fet['employee_password'];
			$data[$i][12]=$fet['lastupdate'];
			$data[$i][13]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
	
	

/**********************************************************************/
/**********************************************************************/
function get_positionList()
{
	$data="";
	$sql="SELECT * FROM tb_position order by po_id asc";
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
function get_positionSearch($id)
{
	$data="";
	$sql="SELECT * FROM tb_position where po_id='$id'";
	$qry=mysql_query($sql);
	$fet=mysql_fetch_array($qry);
	$data[1]=$fet['po_id'];
	$data[2]=$fet['po_name'];
	return $data;
}
	
?>