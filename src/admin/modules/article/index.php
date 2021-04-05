<?
	session_start();
	//include "config/connect/connect.php";
	//$data=$_REQUEST['data'];
	$datapage="Module/other";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<iframe id="uploadtarget" name="uploadtarget" src="" style="width:0px;height:0px;border:0"></iframe>
<table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <?
    	if($data==""){include "$datapage/_contact.php";}
		if($data=="add"){include "$datapage/_adduser.php";}
		if($data=="edit"){include "$datapage/_edituser.php";}
		if($data=="grant"){include "$datapage/_grant.php";}
	?>
    </td>
  </tr>
</table>
