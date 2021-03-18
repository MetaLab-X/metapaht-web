<?
	function get_zoneList($sort)
	{
		if($sort==""){$sorting="asc";}
		
		if($sort=="First"){$sorting="asc";}
		if($sort=="Last"){$sorting="desc";}
		
		$data="";
		$sql="select * from tb_zone order by zone_name ".$sorting;
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['zone_id'];
			$data[$i][2]=$fet['zone_name'];
			$data[$i][3]=$fet['add_by'];
			$data[$i][4]=$fet['add_date'];
			
			$i=$i+1;
		}
		return $data;
	}
	
	
	function get_province()
	{
		$sql="select * from province order by PROVINCE_NAME asc";
		$data="";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['PROVINCE_ID'];
			$data[$i][2]=$fet['PROVINCE_CODE'];
			$data[$i][3]=$fet['PROVINCE_NAME'];
			$i=$i+1;
		}
		return $data;
	}
	
	function get_cusZone($cusid)
	{
		$data="";
		$sql="SELECT * FROM tb_zone_province where zone_id='$cusid' order by zonep_id asc";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['zonep_id'];
			$data[$i][2]=$fet['zone_id'];
			$fetp1=mysql_fetch_array(mysql_query("select * from province where PROVINCE_ID='".$fet['PROVINCE_ID']."'"));
			$fetp2=mysql_fetch_array(mysql_query("select * from amphur where AMPHUR_ID='".$fet['AMPHUR_ID']."'"));
			$data[$i][3]=$fetp1['PROVINCE_NAME'];
			$data[$i][4]=$fetp2['AMPHUR_NAME'];
			$data[$i][5]=$fet['lastupdate'];
			$data[$i][6]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
	
	function employee_list()
	{
		$data="";
		$sql="SELECT * from tb_employee, tb_position
where tb_employee.employee_position=tb_position.po_id
and tb_employee.employee_id NOT IN (
	select tb_employee.employee_id 
    from tb_employee, tb_zone_employee 
    where tb_employee.employee_id=tb_zone_employee.employee_id 
    and tb_employee.employee_position NOT IN (0000000026,0000000027) 
)
ORDER by tb_position.po_id  asc , tb_employee.employee_name ASC";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['employee_id'];
			$data[$i][2]=$fet['employee_code'];
			$data[$i][3]=$fet['prename_id'];
			$data[$i][4]=$fet['po_name']." ".$fet['employee_name']." ".$fet['employee_lastname']." [ ".$fet['employee_nickname']." ]";
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
	
	function get_zoneEmployee($Zoneid)
	{
		$sql="select * from tb_zone_employee,  tb_employee , tb_position where tb_zone_employee.employee_id =  tb_employee.employee_id 
		and tb_employee.employee_position =  tb_position.po_id 
		and tb_zone_employee.zone_id='$Zoneid' order by po_id ,  employee_name asc";
		$data="";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['zone_saleid'];
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
			$data[$i][14]=$fet['po_name'];
			$i=$i+1;
		}
		return $data;

	}

?>