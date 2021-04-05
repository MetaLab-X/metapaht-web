<?
	session_start();
	/*include "config/connect/connect.php";
	$db1="editer";
	$view=$_REQUEST['view'];
	$fetRoom=mysql_fetch_array(mysql_query("SELECT * FROM $db1 where id='$view' "));
$UID=$fetRoom['addby'];
$fetUser=mysql_fetch_array(mysql_query("SELECT * FROM user_login where user_id='$UID' "));
		$d1=date("d");
			$d2=date("m");
			$d3=date("Y");
			$d4=date("H");
			$d5=date("i");
			$d6=date("s");
	$date_add="$d1/$d2/$d3 $d4:$d5:$d6";
	$user_add=$_SESSION["username1"];
	
	$page1="Admin_Panel.php?content=Other";
	$content=$_REQUEST[action];
	if($content=="delete")
	{
		$superid=$_REQUEST['id'];
		$sqk="delete from $db1 where user_id='$superid'";
		mysql_query($sqk);
		echo "<meta http-equiv='refresh' content='0;url=$page1'>" ;
		  $sql1="select * from $db1";
	}
	else 
	{  
			$sql1="select * from $db1"; 
			$fet=mysql_fetch_array(mysql_query($sql1));
			$adminID=$fet['upby'];
			$fet2=mysql_fetch_array(mysql_query("select * from user_login where user_id='$adminID'"));
	}
	*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
<link rel="stylesheet" href="template/admin1/style/header.css" type="text/css" media="screen">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
 <script type="text/javascript">
 function controlpanel(){	window.location="../../Admin_Panel.php?content=Content&view=<? echo $view;?>";	}
  function controlpanel1(){	CKEDITOR.instances.message.focus();	}
  function controlpanel2(){	CKEDITOR.instances.message2.focus();		}
  function clickupload()
  {
		alert("check");	  
}
</script>
   <form id="frmUpload1" action="Module/other/form_contact.php" method="post" enctype="multipart/form-data"  target="uploadtarget" >
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  style="-webkit-border-radius: 10px;
	-moz-border-radius: 10px; border-radius: 10px; -o-border-radius: 10px;background:url(template/admin1/index/loginsite.png);">
  <tr>
    <td><table width="98%" border="0" align="right" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3" height="10px"><font size="1"><input name="action" type="hidden" id="action" value="edit">
           <input name="dbL" type="hidden" id="dbL" value="<? echo $db1;?>">
          <input name="eID" type="hidden" id="eID" value="<? echo $view;?>"></font></td>
      </tr>
      <tr>
        <td width="5%"><img src="template/admin1/header/icon-48-category.png" width="48" height="48"></td>
        <td width="45%" class="font1"><? echo $fetRoom['name'];?></td>
        <td width="50%"><table width="210" border="0" align="right" cellpadding="0" cellspacing="0">
          <tr>
            <td width="70" align="center"><table width="70" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="bottom" >&nbsp;</td>
              </tr>
              <tr>
                <td align="center" class="fontMenu">&nbsp;</td>
              </tr>
            </table></td>
            <td width="70" align="center" style="border-left:1px #F5F5F5 inset"><table width="70" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" valign="bottom" ><input type="image" src="template/admin1/adminpanel/save3.png" name="button" id="button" value="Submit"></td>
              </tr>
              <tr>
                <td align="center" class="fontMenu">Save</td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="3" height="10px"><font size="1"></font></td>
      </tr>
    </table></td>
  </tr>
</table><br>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0"  style="-webkit-border-radius: 10px;
	-moz-border-radius: 10px; border-radius: 10px; -o-border-radius: 10px;background:url(template/admin1/index/loginsite.png);">
  <tr>
    <td><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td width="71%" valign="top">
        <div style="margin-left:10px;" align="left">
          <fieldset style="background-color:#FFF; font-family:Verdana, Geneva, sans-serif; color:#00F; font-weight:bold;font-size:12px"">
            <legend >รายละเอียด TH</legend>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2" align="center"><label>
                  <textarea name="message" cols="120" rows="50" id="message" class="ckeditor"><? echo $fetRoom['detail_th'];?></textarea>
                  <script type="text/javascript"> CKEDITOR.replace( 'message',{ skin   : 'kama',height   : 900, width    : 900,   
			 toolbar :[  ['Source'],['Bold','Italic','Underline'],['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],['Link','Unlink'], ['Image','Flash','Table','HorizontalRule','Smiley'],['TextColor','BGColor'],['Font','FontSize']],
			filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
     
            } );</script>
                </label></td>
              </tr>
            </table>
          </fieldset>
        </div><br>
         <div style="margin-left:10px;" align="left">
          <fieldset style="background-color:#FFF; font-family:Verdana, Geneva, sans-serif; color:#00F; font-weight:bold;font-size:12px"">
            <legend >รายละเอียด EN</legend>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td colspan="2" align="center"><label>
                  <textarea name="message2" cols="120" rows="50" id="message2" class="ckeditor"><? echo $fetRoom['detail_en'];?></textarea>
                  <script type="text/javascript"> CKEDITOR.replace( 'message2',{ skin   : 'kama',height   : 900, width    : 900,   
			 toolbar :
        [  ['Source'],
            ['Bold','Italic','Underline'],
            ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
            ['Link','Unlink'],
            ['Image','Flash','Table','HorizontalRule','Smiley'],
            ['TextColor','BGColor'],['Font','FontSize']],
			filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
            filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
            filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
            } );</script>
                </label></td>
              </tr>
            </table>
          </fieldset>
        </div><br>
        </td>
        <td width="29%" valign="top"><table width="400" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td><div style="margin-left:10px;" align="left">
              <fieldset style="background-color:#FFF; font-family:Verdana, Geneva, sans-serif; color:#00F; font-weight:bold; font-size:12px">
                <legend >ข้อมูลการแก้ไข</legend>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" style="font-family:Verdana, Geneva, sans-serif; color:#333; font-size:4px;">
                  <tr>
                    <td width="23%" height="35">Update by : </td>
                    <td width="77%" height="35"><label>
                      <input name="t" type="text" id="t" size="30" readonly="readonly" value="<? echo $fetUser['username'];?>" style="border-radius:5px; border:1px #CCC solid; padding:5px; background-color:#EFEFEF; font-family:Verdana, Geneva, sans-serif; font-size:12px;"> 
                    </label></td>
                  </tr>
                  <tr>
                    <td height="35">Last Update : </td>
                    <td height="35"><label>
                      <input name="t" type="text" id="t2" size="30" readonly="readonly" value="<? echo $fetRoom['addate'];?>"  style="border-radius:5px; border:1px #CCC solid; padding:5px; background-color:#EFEFEF; font-family:Verdana, Geneva, sans-serif; font-size:12px;">
                    </label></td>
                  </tr>
                </table>
              </fieldset>
              
            </div></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table><br></form>