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
	
	function editData($id, $nameTh, $nameEn, $detailTh, $detailEn, $admin, $date){
		$return="";
		$sql="update editer set 
		name_th='$nameTh',
		name_en='$nameEn',
		detail_th='$detailTh',
		detail_en='$detailEn',
		addby='$admin',
		addate='$date'
		where id='$id'";
		$qry=mysql_query($sql);
		if($qry){$return=true;}
		else if(!$qry){$return=false;}
		return $return;
	}
?>