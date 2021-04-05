<?php
	function invoice_list()
	{
		$data="";
		$sql="SELECT * FROM tb_invoice, tb_customer where tb_invoice.customer_id=tb_customer.customer_id order by tb_invoice.invoice_id ASC";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['invoice_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['po_code'];
			$data[$i][4]=$fet['pay_date'];
			$data[$i][5]=$fet['invoice_date'];
			$data[$i][7]=$fet['invoice_code'];
			
			$numData=mysql_num_rows(mysql_query("select * from tb_invoice_detail where invoice_id='".$fet['invoice_id']."'"));
			$data[$i][6]=$numData;
			
			$i=$i+1;
		}
		return $data;
	}
	
	function getInvDataS($id)
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
		
		$fet1=mysql_fetch_array(mysql_query("select * from tb_customer where customer_id='".$fet['customer_id']."'"));
		$fet2=mysql_fetch_array(mysql_query("select * from tb_employee where employee_id='".$fet['employee_id']."'"));
		$fet3=mysql_fetch_array(mysql_query("select * from tb_position where po_id='".$fet2['employee_position']."'"));
		
		$data[13]=$fet1['customer_name'];
		$data[14]=$fet2['employee_name'];
		$data[15]=$fet3['po_name'];
		
		
		
		return $data;
	}
	
	function get_address($id)
	{
		$sql="select * from tb_customer, province, amphur, district
where tb_customer.PROVINCE_ID=province.PROVINCE_ID
and tb_customer.AMPHUR_ID=amphur.AMPHUR_ID
and tb_customer.DISTRICT_ID=district.DISTRICT_ID
and tb_customer.customer_id='".$id."'";
		$fet=mysql_fetch_array(mysql_query($sql));
		$data=$fet['customer_address']." ".$fet['DISTRICT_NAME']." ".$fet['AMPHUR_NAME']." ".$fet['PROVINCE_NAME']." ".$fet['POSTCODE'];
		return $data;
	}
	
	function product_detList($invID)
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
			$fetgg=mysql_fetch_array(mysql_query("select * from tb_product where product_id='".$fet['product_id']."'"));
			
			$data[$i][3]=$fetgg['product_name'];
			$data[$i][4]=$fet['qty'];
			$data[$i][5]=$fet['price'];
			$data[$i][6]=$fet['discount'];
			$data[$i][7]=$fet['summary'];
			
			$i=$i+1;
		}
		return $data;
		
	}
	
	function get_addressCusTom1($id)
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
	
?>
