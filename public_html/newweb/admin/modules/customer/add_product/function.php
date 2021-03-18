<?php
		function product_type_list($sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		$sql="select * from tb_product_type order by product_type_name ".$sorting;
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['product_type_id'];
			$data[$i][2]=$fet['product_type_name'];
			$data[$i][3]=$fet['lastupdate'];
			$data[$i][4]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}


	function product_brand_list($sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		$sql="select * from tb_product_brand order by product_brand_name ".$sorting;
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['product_brand_id'];
			$data[$i][2]=$fet['product_brand_name'];
			$data[$i][3]=$fet['lastupdate'];
			$data[$i][4]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
	function product_sale($cusId)
	{
		$data="";
		$sql="SELECT * from tb_customer_license, tb_product_type, tb_product_brand
where tb_customer_license.product_type_id=tb_product_type.product_type_id
and tb_customer_license.product_brand_id=tb_product_brand.product_brand_id
and tb_customer_license.customer_id='$cusId' ORDER by tb_customer_license.customer_license_id";
		$qry=mysql_query($sql);
		$data[0][0]=mysql_num_rows($qry);
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_license_id'];
			$data[$i][2]=$fet['product_type_name'];
			$data[$i][3]=$fet['product_brand_name'];
			$i=$i+1;
		}
		
		return $data;
		
	}
?>