<?php
	function product_list($type, $sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		if($type==""){$type="name";}
		
		if($sort=="First"){$sorting="asc";}
		if($sort=="Last"){$sorting="desc";}
		
		
		if($type=="name")
		{
			$sql="select * from tb_product , tb_product_type , tb_product_brand WHERE tb_product.product_type_id = tb_product_type.product_type_id AND tb_product.product_brand_id = tb_product_brand.product_brand_id  order by product_name ".$sorting.", tb_product_brand.product_brand_name asc";		
		}
		if($type=="type")
		{
			$sql="select * from tb_product , tb_product_type , tb_product_brand WHERE tb_product.product_type_id = tb_product_type.product_type_id AND tb_product.product_brand_id = tb_product_brand.product_brand_id  
ORDER BY tb_product_type.product_type_name ".$sorting.", tb_product_brand.product_brand_name asc";	
		}
		if($type=="brand")
		{
			$sql="select * from tb_product , tb_product_type , tb_product_brand WHERE tb_product.product_type_id = tb_product_type.product_type_id AND tb_product.product_brand_id = tb_product_brand.product_brand_id  
ORDER BY tb_product_brand.product_brand_name ".$sorting.", tb_product_type.product_type_name asc";	
		}
		
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['product_id'];
			$data[$i][2]=$fet['product_type_name'];
			$data[$i][3]=$fet['product_name'];
			$data[$i][4]=$fet['product_brand_name'];
			$data[$i][5]=$fet['product_img'];
			$data[$i][6]=$fet['lastupdate'];
			$data[$i][7]=$fet['updateby'];
			$i=$i+1;
		}
		return $data;
	}
?>
