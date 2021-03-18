<?
	function CheckImage($data)
	{
		$data1="";
		$f_type=strtolower($data);
		if ($f_type== "image/gif" || $f_type== "image/png" || $f_type== "image/jpeg")
		{
			$data1="true";
		}
		else {$data1="false";}
		return $data1;
	}
	function CheckImageJPEG($data)
	{
		$data1="";
		$f_type=strtolower($data);
		if ($f_type== "image/gif" || $f_type== "image/png" || $f_type== "image/jpeg")
		{
			$data1="true";
		}
		else {$data1="false";}
		return $data1;
	}
	
		function CheckPDF($data)
	{
		$data1="";
		$f_type2=strtolower($data);
		if($f_type2=="application/msword" || $f_type2=="application/pdf" || $f_type2=="application/vnd.openxmlformats-officedocument.wordprocessingml.document")
		{
			$data1="true";
		}
		else {$data1="false";}
		return $data1;
	}
	
	function CheckHTML($data)
	{
		$data1="";
		$f_type2=strtolower($data);
		if($f_type2=="text/html" || $f_type2=="application/octet-stream")
		{
			$data1="true";
		}
		else {$data1="false";}
		return $data1;
	}
	
	function get_Action_date()
	{
			date_default_timezone_set("Asia/Bangkok");
			$d1=date("d");
			$d2=date("m");
			$d3=date("Y");
			$d4=date("H");
			$d5=date("i");
			$d6=date("s");
			$date[0]="$d1$d2$d3$d4$d5$d6";
			$date[1]="$d1-$d2-$d3 $d4:$d5:$d6";
			return $date;
	}
	function check_user_Action($userId,$userType)
	{
		$sqlCheck="select * from user_login where user_id='".$userId."' and userType='".$userType."'";
		$numRow=mysql_num_rows(mysql_query($sqlCheck));
		if($numRow!=0 || $numRow!=""){ return true;}
		if($numRow==0 || $numRow==""){ return false;}
	}
	function setImageCharactorType($text){
		$uploadImg=iconv("utf-8","tis-620",$text);
		$dbImg=iconv("tis-620","utf-8",$uploadImg);
		$data=$dbImg;
		return $data;
	}
?>