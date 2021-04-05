<?php
	/* SQL EVENT **********************************************************************************/
	function insert_user($type, $name, $username, $password,$date,$updateby)
	{
		$sql="insert into tb_administrator(userType,name,username,password,lastupdate,updateby) values('$type','$name','$username','$password','$date','$updateby')";
		
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	/************************************************************************************************/
	
	/* SEARCH GETTITLE EVENT*************************************************************************/
	function Search_user($code)
	{
		$sql="select * from tb_administrator where username='$code'";
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data="";
		if($numR=="" || $numR==0){$data=true;}
		else if($numR!="" || $numR!=0){$data=false;}
		return $data;
	}
	
	/************************************************************************************************/


?>