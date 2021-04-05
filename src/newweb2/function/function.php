<?php
	function getdata_editer($id)
	{
		$sql="select * from  editer where id='$id'";
		$fetData=mysql_fetch_array(mysql_query("$sql"));
		$dataE="";
		
		$dataE[1]=$fetData['id'];
		$dataE[2]=$fetData['name_th'];
		$dataE[3]=$fetData['name_en'];
		$dataE[4]=$fetData['detail_th'];
		$dataE[5]=$fetData['detail_en'];
		return $dataE;
	}

?>