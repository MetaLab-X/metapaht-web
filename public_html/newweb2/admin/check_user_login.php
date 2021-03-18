<?
	session_start();
	include "libraries/config/config.php";
	$db1="user_login";
	$username=$_POST['set_username'];
	$password=$_POST['set_password'];
	$sql="select * from $db1";
	$result=mysql_query($sql);
	$numresult=0;
	$us_name="";
	$us_pass="";
	echo $username." ".$password."<br>";
	while($fetch_chk=mysql_fetch_array($result))
	{
		$us_name=$fetch_chk['username'];
		$us_pass=$fetch_chk['password'];
		$us_name=md5($us_name);
		$us_pass=md5($us_pass);
					echo $username." - ".$us_name."<br>";
		if($us_name==$username){
			if($us_pass==$password){
				$numresult=1;
				$iip=$fetch_chk['user_id'];
				$_SESSION["user_id"]=$fetch_chk['user_id'];
				$_SESSION["user_type"]=$fetch_chk['userType'];
				$_SESSION["user_name"]=$fetch_chk['name'];
				$_SESSION["user_username"]=$fetch_chk['username'];
				$_SESSION["user_lastupdate"]=$fetch_chk['lastupdate'];
				$_SESSION["user_lastconnect"]=$fetch_chk['lastconnect'];
		
				date_default_timezone_set("Asia/Bangkok");
				$d1=date("d");
				$d2=date("m");
				$d3=date("Y");
				
				$d4=date("H");
				$d5=date("i");
				$d6=date("s");
				$date="$d1/$d2/$d3 $d4:$d5:$d6";
				$sql_Update="update $db1 set lastconnect='$date' where user_id='$iip' ";
				mysql_query($sql_Update);
				echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.uploadok('');</script>";
			} 
		}
		
	}
	if($numresult==0)
	{
		echo "<script language=\"JavaScript\" type=\"text/javascript\"> window.parent.setFocus2();</script>";
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><? /////////////////////?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ADMIN Panel</title>