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
		$sql="select * from tb_customer where customer_type IN (1,3) order by customer_name asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$i=$i+1;
		}
		return $data;
	}
	
	function customer_listSend()
	{
		$data="";
		//$sql="select * from tb_customer order by customer_name asc";
		
		$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		from tb_customer as t2 where  t2.customer_type IN (1,2,3) order by  t2.customer_name asc";
		
		
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
			$data[$i][7]=$fet['customer_mail'];
			$data[$i][8]=$fet['customer_tel'];
			$data[$i][9]=$fet['customer_fax'];
			$data[$i][10]=$fet['customer_tax'];
			$data[$i][11]=$fet['lastupdate'];
			$data[$i][12]=$fet['updateby'];

			
			$data[$i][13]=$fet['customer_name']." ".$fet['customer_address']." ".$fet['DISTRICT_NAME']." ".$fet['AMPHUR_NAME']." ".$fet['PROVINCE_NAME']." ".$fet['POSTCODE']." ".$fet['customer_tel'];
			
			$i=$i+1;
		}
		return $data;
	}
	
	
		function product_list()
	{
		$data="";
		$sql="select * from tb_product, tb_product_brand, tb_product_type where tb_product.product_brand_id=tb_product_brand.product_brand_id and tb_product.product_type_id=tb_product_type.product_type_id ORDER by tb_product.product_name ASC, tb_product_brand.product_brand_id ASC, tb_product_type.product_type_id ASC";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['product_id'];
			$data[$i][3]=$fet['product_name']." ".$fet['product_brand_name']." ".$fet['product_type_name'];
			$data[$i][4]=$fet['product_img'];
			$data[$i][5]=$fet['lastupdate'];
			$data[$i][6]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
	
	function getInvData($id)
	{
		$sl="SELECT * FROM tb_invoice where invoice_id='$id'";
		$fet=mysql_fetch_array(mysql_query($sl));
		$data="";
		$data[1]=$fet['invoice_id'];
		$data[2]=$fet['invoice_code'];
		$data[3]=$fet['po_code'];
		$data[4]=$fet['invoice_date'];
		$data[5]=$fet['invoice_pay'];
		$data[6]=$fet['pay_date'];
		$data[7]=$fet['employee_id'];
		$data[8]=$fet['customer_id'];
		$data[9]=$fet['send_ot_customer_id'];
		$data[10]=$fet['invoice_remark'];
		$data[11]=$fet['lastupdate'];
		$data[12]=$fet['updateby'];
		
		$FETpo=mysql_fetch_array(mysql_query("select tb_position.po_name from tb_employee, tb_position
where tb_employee.employee_position=tb_position.po_id
and tb_employee.employee_id='".$fet['employee_id']."'"));
		$data[13]=$FETpo['po_name'];
		$data[14]=$fet['customer_s_id'];
		
		$fetCustom=mysql_fetch_array(mysql_query("select * from tb_customer where customer_id='".$fet['customer_id']."'"));
		$data[15]=$fetCustom['customer_name'];
		
		$fetCustom2=mysql_fetch_array(mysql_query("select * from tb_customer where customer_id='".$fet['customer_s_id']."'"));
		$data[16]=$fetCustom2['customer_name'];
		
		return $data;
	}
	function get_addressCusTom($id)
	{

		$sql="select * ,
		(SELECT DISTRICT_NAME  FROM  district WHERE DISTRICT_ID = t2.DISTRICT_ID) as DISTRICT_NAME ,
		(SELECT AMPHUR_NAME    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as AMPHUR_NAME ,
		(SELECT POSTCODE    FROM  amphur WHERE AMPHUR_ID = t2.AMPHUR_ID) as POSTCODE ,
		(SELECT PROVINCE_NAME  FROM  province WHERE PROVINCE_ID = t2.PROVINCE_ID) as PROVINCE_NAME
		
		from tb_customer as t2 where t2.customer_id='".$id."'";

		$fet=mysql_fetch_array(mysql_query($sql));
		$data=$fet['customer_address']." ".$fet['DISTRICT_NAME']." ".$fet['AMPHUR_NAME']." ".$fet['PROVINCE_NAME']." ".$fet['POSTCODE']." ".$fet['customer_tel'];
		return $data;
	}
	
	function product_detListEdit($invID)
	{
		$data="";
		$sql="SELECT * FROM tb_invoice_detail where invoice_id ='$invID' order by tb_invoice_detail_id asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['tb_invoice_detail_id'];
			$data[$i][2]=$fet['invoice_id'];
			$fetgg=mysql_fetch_array(mysql_query("select * from tb_product, tb_product_brand, tb_product_type
where tb_product.product_brand_id=tb_product_brand.product_brand_id
and tb_product.product_type_id=tb_product_type.product_type_id
and tb_product.product_id='".$fet['product_id']."'"));
			
			$data[$i][3]=$fetgg['product_name']." ".$fetgg['product_brand_name']." ".$fetgg['product_type_name'];
			$data[$i][4]=$fet['qty'];
			$data[$i][5]=$fet['price'];
			$data[$i][6]=$fet['discount'];
			$data[$i][7]=$fet['summary'];
			
			$i=$i+1;
		}
		return $data;
		
	}
	
?>