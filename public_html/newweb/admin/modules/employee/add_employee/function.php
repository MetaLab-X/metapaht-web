<?php
	/* SQL EVENT **********************************************************************************/
	function insert_employee($code, $id, $name, $lastname,$nickname, $phone, $address, $position, $usertype, $password,$image,$regisdate,$updateby)
	{
		$sql="insert into tb_employee values('','$code','$id','$name','$lastname','$nickname','$address','$phone','$usertype','$position','null','$password','$image','$regisdate','$updateby')";
		
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	/************************************************************************************************/
	
	/* SEARCH GETTITLE EVENT*************************************************************************/
	function Search_employee($code)
	{
		$sql="select * from tb_employee where employee_code='$code'";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data="";
		if($numR=="" || $numR==0){$data=true;}
		else if($numR!="" || $numR!=0){$data=false;}
		return $data;
	}
	
	function get_preName()
	{
		$data="";
		$sql="SELECT * FROM tb_prename order by prename_id asc";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$round=1;
		$data[0][0]=$numRow;
		while($Array=mysql_fetch_array($qry))
		{
			$data[$round][1]=$Array['prename_id'];
			$data[$round][2]=$Array['prename_name'];
			$round=$round+1;
		}
		return $data;
		
	}
	
	function get_positionList()
	{
		$data="";
		$sql="SELECT * FROM tb_position";
		$qry=mysql_query($sql);
		$numRow=mysql_num_rows($qry);
		$data[0][0]=$numRow;
		$round=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$round][1]=$fet['po_id'];
			$data[$round][2]=$fet['po_name'];
			$round=$round+1;
		}
		return $data;
	}
	/************************************************************************************************/


?>