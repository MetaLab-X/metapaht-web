<?php
function getProductList(){
	$sql="SELECT news.id, news.titleTH,news.con_show, news_cate.cate_nameTH,news.con_img, news.con_modified
	from news, news_cate
	WHERE news.cate=news_cate.cate_id	
	ORDER by news.id desc";
	
	
	// if($catID!=""){$catSerch="AND news_list.cat_id='$catID' ";}
	// else if($catID==""){$catSerch="";}
	
	// if($bandID!=""){$bandSerch="AND news_list.brand_id='$bandID' ";}
	// else if($bandID==""){$bandSerch="";}
	
	// if($order==""){$sort="ORDER by news_list.product_nameTh ASC";}
	
		//$sql=$sql.$catSerch.$bandSerch.$sort;
	
		//echo $sql;
	$qry=mysql_query($sql);
	$size1=mysql_num_rows(mysql_query($sql));
	$data="";
	$data[0][0]=$size1;
	$i=1;
	while($fetData=mysql_fetch_array($qry))
	{
		$data[$i][1]=$fetData['id'];
		$data[$i][2]=$fetData['titleTH'];
		$data[$i][3]=$fetData['con_show'];
		$data[$i][4]=$fetData['cate_nameTH'];
		// $data[$i][5]=$fetData['brand_name_th'];
		$data[$i][6]=$fetData['con_img'];
		// $data[$i][7]=$fetData['product_price'];
		$data[$i][8]=$fetData['con_modified'];
		// $data[$i][9]=$fetData['product_bestsale'];
		$i=$i+1;
	}
	return $data;
}

function Get_category_List()
{
	$sql="select cate_id, cate_nameTH from news_cate order by cate_id asc";
	
	$qry=mysql_query($sql);
	$fetData=mysql_fetch_array(mysql_query($sql));
	$size1=mysql_num_rows(mysql_query($sql));
	$data="";
	$data[0][0]=$size1;
	$i=1;
	while($fetData=mysql_fetch_array($qry))
	{
		$data[$i][1]=$fetData['cate_id'];
		$data[$i][2]=$fetData['cate_nameTH'];
		$i=$i+1;
	}
	return $data;
} 
function Get_brand_List()
{
	if($categoryID==""){$sql="select * from tb_brand order by brand_id asc";}
	else if($categoryID!=""){$sql="select * from tb_brand where cat_id='$categoryID' order by brand_id asc";}
	
	
	$qry=mysql_query($sql);
	$fetData=mysql_fetch_array(mysql_query($sql));
	$size1=mysql_num_rows(mysql_query($sql));
	$data="";
	$data[0][0]=$size1;
	$i=1;
	while($fetData=mysql_fetch_array($qry))
	{
		$data[$i][1]=$fetData['brand_id'];
		$data[$i][2]=$fetData['brand_name_th'];
		$data[$i][13]=$fetData['cat_id'];
		$i=$i+1;
	}
	return $data;
}
function Get_brand_List2($categoryID)
{
	if($categoryID==""){$sql="select * from tb_brand order by brand_id asc";}
	else if($categoryID!=""){$sql="select * from tb_brand where cat_id='$categoryID' order by brand_id asc";}
	
	
	$qry=mysql_query($sql);
	$fetData=mysql_fetch_array(mysql_query($sql));
	$size1=mysql_num_rows(mysql_query($sql));
	$data="";
	$data[0][0]=$size1;
	$i=1;
	while($fetData=mysql_fetch_array($qry))
	{
		$data[$i][1]=$fetData['brand_id'];
		$data[$i][2]=$fetData['brand_name_th'];
		$data[$i][13]=$fetData['cat_id'];
		$i=$i+1;
	}
	return $data;
}

function Get_product_data($id){
	$data="";
	$sql="select * from news where id='$id'";
		//echo $sql;
	$qry=mysql_query($sql);
	if($qry){
		$fet=mysql_fetch_array($qry);
		$data[1][1]=$fet['id'];
		$data[1][2]=$fet['cate'];
		//$data[1][3]=$fet['brand_id'];
		$data[1][4]=$fet['titleTH'];
		$data[1][5]=$fet['titleEN'];
		$data[1][6]=$fet['key_TH'];
		$data[1][7]=$fet['key_EN'];
		$data[1][8]=$fet['descriptionTH'];
		$data[1][9]=$fet['descriptionEN'];
		$data[1][10]=$fet['detailTH'];
		$data[1][11]=$fet['detailEN'];
		$data[1][12]=$fet['con_img'];
		// $data[1][13]=$fet['product_price'];
		return $data;
	}
	
	
}
?>