<?php
	function update_product($proid, $name, $type, $brand, $update, $addby)
	{
		$qry=mysql_query("update tb_product set
		product_type_id='$type',
		product_name='$name',
		product_brand_id='$brand',
		lastupdate='$update',
		updateby='$addby'
		where product_id='$proid'");
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
		return $return;
	}

	function get_productValue($id)
	{
		$data="";
		$fet=mysql_fetch_array(mysql_query("select * from tb_product where product_id='$id'"));
		$data[1]=$fet['product_id'];
		$data[2]=$fet['product_type_id'];
		$data[3]=$fet['product_name'];
		$data[7]=$fet['product_brand_id'];
		$data[4]=$fet['product_img'];
		$data[5]=$fet['lastupdate'];
		$data[6]=$fet['updateby'];
		
		return $data;
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