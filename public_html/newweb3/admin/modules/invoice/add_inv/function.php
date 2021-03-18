<?php
	function insert_customer($setType,$MainShopID,$shopType,$name, $address, $pro, $amp, $distric, $email, $tel, $fax, $tax, $type, $ptype, $conname, $contel,$lastupdate, $updateby)
	{
		if($setType=="MainShop")
		{
			$sql="insert into tb_customer values('','0','$name','$conname', '$contel','$address','$pro','$amp','$distric','$email','$tel','$fax','$tax',$shopType,'0','$lastupdate','$updateby');";
		}
		else if($setType=="SideShop")
		{
			$sql="insert into tb_customer values('','$MainShopID','$name','$conname', '$contel','$address','$pro','$amp','$distric','$email','$tel','$fax','$tax','2','0','$lastupdate','$updateby');";
		}
		
		//echo $sql;
		$qry=mysql_query($sql);
		$return=mysql_insert_id();
		return $return;
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
	function getCusTomerName()
	{
		$data="";
		$sql="select * from tb_customer where customer_type IN (1,3) order by customer_name asc";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['customer_id'];
			$data[$i][2]=$fet['customer_name'];
			$data[$i][3]=$fet['customer_address'];
			$data[$i][4]=$fet['PROVINCE_ID'];
			$data[$i][5]=$fet['AMPHUR_ID'];
			$data[$i][6]=$fet['DISTRICT_ID'];
			$data[$i][7]=$fet['customer_mail'];
			$data[$i][8]=$fet['customer_tel'];
			$data[$i][9]=$fet['customer_fax'];
			$data[$i][10]=$fet['customer_tax'];
			$data[$i][11]=$fet['lastupdate'];
			$data[$i][12]=$fet['updateby'];
			
			$fetGetAddress=mysql_fetch_array(mysql_query("select * from province, amphur, district  where  province.PROVINCE_ID='".$fet['PROVINCE_ID']."'
and amphur.AMPHUR_ID='".$fet['AMPHUR_ID']."' and district.DISTRICT_ID='".$fet['DISTRICT_ID']."'"));
			
			$data[$i][13]=$fet['customer_name']." ".$fet['customer_address']." ".$fetGetAddress['DISTRICT_NAME']." ".$fetGetAddress['AMPHUR_NAME']." ".$fetGetAddress['PROVINCE_NAME']." ".$fetGetAddress['POSTCODE']." ".$fet['customer_tel'];
			
			$i=$i+1;
		}
		return $data;
	}
?>