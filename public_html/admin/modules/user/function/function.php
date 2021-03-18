<?php
	function user_list($type,$sort)
	{
		$data="";
		if($sort==""){$sorting="asc";}
		else if($sort=="First"){$sorting="asc";}
		else if($sort=="Last"){$sorting="desc";}
		$sql="select * from tb_administrator order by name ".$sorting;
		$qry=mysql_query($sql);
		$numR=mysql_num_rows($qry);
		$data[0][0]=$numR;
		$i=1;
		while($fet=mysql_fetch_array($qry))
		{
			$data[$i][1]=$fet['user_id'];
			$data[$i][2]=$fet['userType'];
			$data[$i][3]=$fet['name'];
			$data[$i][4]=$fet['username'];
			$data[$i][5]=$fet['password'];
			$data[$i][6]=$fet['lastupdate'];
			$i=$i+1;
		}
		return $data;
	}
	
	

?>