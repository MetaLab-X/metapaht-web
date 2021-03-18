<?php
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
			$data[$i][2]=$fet2['type_name'];
			$data[$i][3]=$fet['product_name']." ".$fet['product_brand_name']." ".$fet['product_type_name'];
			$data[$i][4]=$fet['product_img'];
			$data[$i][5]=$fet['lastupdate'];
			$data[$i][6]=$fet['updateby'];
			$i=$i+1;
		}
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