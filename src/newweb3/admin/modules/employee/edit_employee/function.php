<?php
	/* SQL EVENT **********************************************************************************/
	function get_employeeDetail($id)
	{
		$data="";
		$sql="select * from tb_employee where employee_id='$id'";
		$qry=mysql_query($sql);
		$fet=mysql_fetch_array($qry);
		$i=1;
			$data[1]=$fet['employee_id'];
			$data[2]=$fet['employee_code'];
			$data[3]=$fet['prename_id'];
			$data[4]=$fet['employee_name'];
			$data[5]=$fet['employee_lastname'];
			$data[6]=$fet['employee_address'];
			$data[7]=$fet['employee_tel'];
			$data[8]=$fet['employee_email'];
			$data[9]=$fet['employee_position'];
			$data[10]=$fet['employee_type'];
			$data[11]=$fet['employee_password'];
			$data[12]=$fet['employee_img'];
			$data[13]=$fet['lastupdate'];
			$data[14]=$fet['updateby'];
			$data[15]=$fet['employee_nickname'];
			
		return $data;
	}

	function update_employee($code, $id, $name, $lastname, $nickname, $phone, $address, $position, $username, $password,$regisdate,$updateby,$emId)
	{
		$sql="update tb_employee set 
		employee_code='$code',
		prename_id='$id',
		employee_name='$name',
		employee_lastname='$lastname',
		employee_nickname='$nickname',
		employee_address='$address',
		employee_tel='$phone',
		employee_email='$username',
		employee_position='$position',
		employee_password='$password',
		lastupdate='$regisdate',
		updateby='$updateby'
		where employee_id='$emId'";
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	
	/************************************************************************************************/

	function get_preName()
	{
		$data="";
		$sql="SELECT * FROM tb_prename order by prename_id asc";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$round=1;
		$data[0][0]=$numRow;
		while($Array=mysql_fetch_array($qry))
		{
			$data[$round][1]=$Array['prename_id'];
			$data[$round][2]=$Array['prename_name'];
			$round=$round+1;
		}
		return $data;
		
	}
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