<?php
	function insert_customer($shopType,$name, $address, $pro, $amp, $distric, $email, $tel, $fax, $tax, $type, $ptype, $conname, $contel,$lastupdate, $updateby)
	{
		if($type==""){$type=1;}
		if($ptype==""){$ptype=0;}
		$sql="insert into tb_customer values('','0','$name','$conname', '$contel','$address','$pro','$amp','$distric','$email','$tel','$fax','$tax',$shopType,$ptype,'$lastupdate','$updateby');";
		echo $sql;
		$qry=mysql_query($sql);
		$return="";
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
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
?>