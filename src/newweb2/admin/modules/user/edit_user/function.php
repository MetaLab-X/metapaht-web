<?php
	/* SQL EVENT **********************************************************************************/
	function get_userDetail($id)
	{
		$data="";
		$sql="select * from tb_administrator where user_id='$id'";
		$qry=mysql_query($sql);
		$fet=mysql_fetch_array($qry);
		$i=1;
			$data[1]=$fet['user_id'];
			$data[2]=$fet['userType'];
			$data[3]=$fet['name'];
			$data[4]=$fet['username'];
			$data[5]=$fet['password'];
			$data[6]=$fet['lastupdate'];
			$data[7]=$fet['updateby'];
			
		return $data;
	}

	function update_user($type, $name, $username, $password, $date,$updateby,$ById)
	{
		$sql="update tb_administrator set 
		userType='$type',
		name='$name',
		username='$username',
		password='$password',
		lastupdate='$date',
		updateby='$updateby'
		where user_id='$ById'";

		echo $sql;
		$qry=mysql_query($sql);
		if($qry){return true;}
		else if(!$qry){return false;}
	}
	

?>