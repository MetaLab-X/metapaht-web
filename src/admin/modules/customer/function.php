<?php
	function customer_list($type,$sort,$action,$txt)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		
		if($action!="")
		{
			$sql="select * from tb_customer where customer_name like '%$txt%'  order by customer_name asc";
		}
		else if($action=="")
		{
			if($type=="")
			{
				$sql="select * from tb_customer where child_of_id='0'  and customer_type!='2' order by customer_type asc, customer_name asc";
			}
			else if($type!="")
			{
				$sql="select * from tb_customer where child_of_id='0'  and customer_type='$type' order by customer_type asc, customer_name asc";
			}
		}
		
		
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;

		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['customer_address'];
			$fet1=mysql_fetch_array(mysql_query("select * from province where PROVINCE_ID='".$fet['PROVINCE_ID']."'"));
			$fet2=mysql_fetch_array(mysql_query("select * from amphur where AMPHUR_ID='".$fet['AMPHUR_ID']."'"));
			$fet3=mysql_fetch_array(mysql_query("select * from district where DISTRICT_ID='".$fet['DISTRICT_ID']."'"));
			
			$data[$i][4]=$fet1['PROVINCE_NAME'];
			$data[$i][5]=$fet2['AMPHUR_NAME'];
			$data[$i][6]=$fet3['DISTRICT_NAME'];
			
			$data[$i][7]=$fet['customer_mail'];
			$data[$i][8]=$fet['customer_tel'];
			$data[$i][9]=$fet['customer_fax'];
			$data[$i][10]=$fet['customer_tax'];
			$data[$i][11]=$fet['lastupdate'];
			$data[$i][12]=$fet['updateby'];
			$data[$i][13]=$fet['customer_type'];
			
			$data[$i][14]=$fet2['POSTCODE'];
			$i=$i+1;
		}
		return $data;
	}
	function customer_listSub($mainID,$sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		$sql="select * from tb_customer where child_of_id='$mainID'  and customer_type='2' order by customer_name ".$sorting;
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['customer_address'];
			$fet1=mysql_fetch_array(mysql_query("select * from province where PROVINCE_ID='".$fet['PROVINCE_ID']."'"));
			$fet2=mysql_fetch_array(mysql_query("select * from amphur where AMPHUR_ID='".$fet['AMPHUR_ID']."'"));
			$fet3=mysql_fetch_array(mysql_query("select * from district where DISTRICT_ID='".$fet['DISTRICT_ID']."'"));
			
			$data[$i][4]=$fet1['PROVINCE_NAME'];
			$data[$i][5]=$fet2['AMPHUR_NAME'];
			$data[$i][6]=$fet3['DISTRICT_NAME'];
			
			$data[$i][7]=$fet['customer_mail'];
			$data[$i][8]=$fet['customer_tel'];
			$data[$i][9]=$fet['customer_fax'];
			$data[$i][10]=$fet['customer_tax'];
			$data[$i][11]=$fet['lastupdate'];
			$data[$i][12]=$fet['updateby'];
			$data[$i][13]=$fet2['POSTCODE'];
			
			$i=$i+1;
		}
		return $data;
	}
	
	
	function customer_detail($id)
	{
		$data="";
		$sql="select * from tb_customer where customer_id='$id'";
		$qry=mysql_query($sql);
		$fet=mysql_fetch_array($qry);
		$i=1;
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['customer_address'];
			$data[$i][4]=$fet['district_id'];
			$data[$i][5]=$fet['customer_tel'];
			$data[$i][6]=$fet['customer_fax'];
			$data[$i][7]=$fet['customer_tax'];
			$data[$i][8]=$fet['lastupdate'];
			$data[$i][9]=$fet['updateby'];
		return $data;
	}


/**********************************************************************/
	function insert_customer($name, $address, $distric, $tel, $fax, $tax, $lastupdate, $updateby)
	{
		$sql="insert into tb_customer values('','$name','$address','$distric','$tel','$fax','$tax','$lastupdate','$updateby')";
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	function update_customer($cuId, $name, $address, $distric, $tel, $fax, $tax, $lastupdate, $updateby)
	{
		$sql="update tb_customer set
		customer_name='$name',
		customer_address='$address',
		district_id='$distric',
		customer_tel='$tel',
		customer_fax='$fax',
		customer_tax='$tax',
		lastupdate='$lastupdate',
		updateby='$updateby'
		where customer_id='$cuId'";
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	function delete_employee($emId)
	{
		$sql="delete from tb_customer where customer_id='$emId'";
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}


/**********************************************************************/
	function search_employee($code, $name, $lastname)
	{
		$sql="select * from tb_customer where customer_name='$name' order by customer_id asc";
		$numR=mysql_num_rows(mysql_query($sql));
		if($numR==0 || $numR==""){return false;}
		else if($numR!=0 || $numR!=""){return true;}
	}

?>
