<?php
	function insert_product($name, $type, $brand,$images, $update, $addby)
	{
		$sql="insert into tb_product (	product_type_id , product_name, product_brand_id, product_img, lastupdate, updateby) values('$type','$name','$brand','$images','$update','$addby')";
		$qry=mysql_query($sql);
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
		return $return;
		
	}


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


?>