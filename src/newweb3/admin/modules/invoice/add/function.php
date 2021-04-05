<?php
	function employee_list()
	{
		$data="";
		$sql="select * from tb_employee, tb_position where tb_employee.employee_position=tb_position.po_id ORDER by tb_position.po_id ASC, tb_employee.employee_name ASC";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['employee_id'];
			$data[$i][2]=$fet['employee_code'];
			$data[$i][3]=$fet['prename_id'];
			$data[$i][4]=$fet['employee_name']." ".$fet['employee_lastname']." [".$fet['employee_nickname']."]"." ".$fet['po_name'];
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

function customer_list()
	{
		$data="";
		$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		
		from tb_customer as t2 where customer_type IN (1,3) order by customer_name asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['customer_address'];
			$data[$i][4]=$fet['PROVINCE_ID'];
			$data[$i][5]=$fet['AMPHUR_ID'];
			$data[$i][6]=$fet['DISTRICT_ID'];
			
			$data[$i][13]=$fet['customer_name']." ".$fet['customer_address']." ".$fet['DISTRICT_NAME']." ".$fet['AMPHUR_NAME']." ".$fet['PROVINCE_NAME']." ".$fet['POSTCODE']." ".$fet['customer_tel'];

			
			$i=$i+1;
		}
		return $data;
	}
	
	function customer_listSend()
	{
		$data="";
		$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		
		from tb_customer as t2 where customer_type IN (1,2,3) order by customer_name asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][13]=$fet['customer_name']." ".$fet['customer_address']." ".$fet['DISTRICT_NAME']." ".$fet['AMPHUR_NAME']." ".$fet['PROVINCE_NAME']." ".$fet['POSTCODE']." ".$fet['customer_tel'];
			
			
			
			$i=$i+1;
		}
		return $data;
	}
	
	
		function product_list()
	{
		$data="";
		$sql="select * from tb_product order by product_name asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['product_id'];
			$typeID=$fet['product_type_id'];
			$fet2=mysql_fetch_array(mysql_query("select * from tb_product_type where product_type_id='$typeID'"));
			$data[$i][2]=$fet2['type_name'];
			$data[$i][3]=$fet['product_name'];
			$data[$i][4]=$fet['product_img'];
			$data[$i][5]=$fet['lastupdate'];
			$data[$i][6]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
	
?>