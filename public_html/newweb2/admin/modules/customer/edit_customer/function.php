<?php
	function insert_customer($name, $address, $dId, $email, $tel, $fax, $tax, $lastupdate, $updateby)
	{
		$sql="insert into tb_customer values('','$name','$address','$dId','$email','$tel','$fax','$tax','lastupdate','$updateby');";
		$qry=mysql_query($sql);
		$return="";
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
		return $return;
	}
	function update_customer($id, $ShopType, $name, $address, $pro, $amp, $dis, $email, $tel, $fax, $tax,$cus, $proT, $conT, $conP, $lastupdate, $updateby)
	{
			if($type==""){$type=1;}
		if($ptype==""){$ptype=0;}
		
		$sql="update tb_customer set
		customer_name='$name',
		customer_contact_name='$conT',
		customer_contact_tel='$conP',
		customer_address='$address',
		PROVINCE_ID='$pro',
		AMPHUR_ID='$amp',
		DISTRICT_ID='$dis',
		customer_mail='$email',
		customer_tel='$tel',
		customer_fax='$fax',
		customer_tax='$tax',
		customer_type='$ShopType',
		lastupdate='$lastupdate',
		updateby='$updateby'
		where customer_id='$id'";
		$qry=mysql_query($sql);
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
		return $return;
	}
	function get_CustomerDetail($id)
	{
		$data="";
		$sql="select * from tb_customer where customer_id='$id'";
		$fet=mysql_fetch_array(mysql_query($sql));
		$data[1]=$fet['customer_id'];
		$data[2]=$fet['customer_name'];
		$data[3]=$fet['customer_address'];
		$data[4]=$fet['PROVINCE_ID'];
		$data[5]=$fet['AMPHUR_ID'];
		$data[61]=$fet['DISTRICT_ID'];
		$data[6]=$fet['customer_mail'];
		$data[7]=$fet['customer_tel'];
		$data[8]=$fet['customer_fax'];
		$data[9]=$fet['customer_tax'];
		$data[10]=$fet['customer_type'];
		$data[11]=$fet['product_type_id'];
		$data[12]=$fet['customer_contact_name'];
		$data[13]=$fet['customer_contact_tel'];
		$data[14]=$fet['lastupdate'];
		$data[15]=$fet['updateby'];
		
		$fet1=mysql_fetch_array(mysql_query("select * from province where PROVINCE_ID='".$fet['PROVINCE_ID']."'"));
		$fet2=mysql_fetch_array(mysql_query("select * from amphur where AMPHUR_ID='".$fet['AMPHUR_ID']."'"));
		$fet3=mysql_fetch_array(mysql_query("select * from  district where DISTRICT_ID='".$fet['DISTRICT_ID']."'"));
		
		$data[15]=$fet1['PROVINCE_NAME'];
		$data[16]=$fet2['AMPHUR_NAME'];
		$data[17]=$fet3['DISTRICT_NAME'];
		return $data;
	}
	
	function get_province()
	{
		$sql="select * from province order by PROVINCE_NAME asc";
		$data="";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['PROVINCE_ID'];
			$data[$i][2]=$fet['PROVINCE_CODE'];
			$data[$i][3]=$fet['PROVINCE_NAME'];
			$i=$i+1;
		}
		return $data;
	}
	/*********************************************************************************************/
	 function getAmphurName($provinceID)
	 {
		 $data="";
		 $sql="select amphur.AMPHUR_ID, amphur.AMPHUR_NAME FROM amphur
	where amphur.PROVINCE_ID='$provinceID'";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet["AMPHUR_ID"];
			$data[$i][2]=$fet["AMPHUR_NAME"];
			$i=$i+1;
		}
		return $data;
	}
	/*********************************************************************************************/
	
	 function getDistricName($ampID)
	 {
		 $data="";
		 $sql="select district.DISTRICT_ID, district.DISTRICT_NAME FROM district where district.AMPHUR_ID='$ampID'";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet["DISTRICT_ID"];
			$data[$i][2]=$fet["DISTRICT_NAME"];
			$i=$i+1;
		}
		return $data;
	}
	/*********************************************************************************************/
?>