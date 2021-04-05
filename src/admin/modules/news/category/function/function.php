<?php
function Get_category_List()
{
	$sql="select * from news_cate order by cate_id asc";

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
		$data[$i][3]=$fetData['cate_nameEN'];
		$data[$i][4]=$fetData['cate_keywordTH'];
		$data[$i][5]=$fetData['cate_keywordEN'];
		$data[$i][6]=$fetData['descriptionTH'];
		$data[$i][7]=$fetData['descriptionEN'];
		$data[$i][8]=$fetData['cate_img'];
		$data[$i][9]=$fetData['added'];
			// $data[$i][10]=$fetData['add_by'];
		$data[$i][11]=$fetData['cate_modified'];
		$data[$i][12]=$fetData['cate_show'];
		$i=$i+1;
	}
	return $data;
}

function Get_Value_cat($id)
{
	$sql="select * from  news_cate where cate_id='$id'";
	$i=1;
	$fetData=mysql_fetch_array(mysql_query($sql));
	$data[$i][1]=$fetData['cate_id'];
	$data[$i][2]=$fetData['cate_nameTH'];
	$data[$i][3]=$fetData['cate_nameEN'];
	$data[$i][4]=$fetData['cate_keywordTH'];
	$data[$i][5]=$fetData['cate_keywordEN'];
	$data[$i][6]=$fetData['descriptionTH'];
	$data[$i][7]=$fetData['descriptionEN'];
	$data[$i][8]=$fetData['cate_img'];
	$data[$i][9]=$fetData['added'];
			// $data[$i][10]=$fetData['add_by'];
	$data[$i][11]=$fetData['cate_modified'];
	$data[$i][12]=$fetData['cate_show'];
	return $data;
}
	/// END CAT //////////////////////////////////////////////////////////////////////////////
?>