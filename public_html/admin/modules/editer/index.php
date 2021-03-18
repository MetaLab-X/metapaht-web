<?php
	$path="modules/editer/";
	$database="editer";
	$datapage="modules/editer";
	include $path."function_Editer.php";
	
	$data="";
	$conCT=$_REQUEST["content"];
	$conCTsub=$_REQUEST["subPage"];
	$fetSubP="";

	$idEditer="";
	if($conCT=="About"){$data="1";}
	if($conCT=="Mission"){$data="2";}
	if($conCT=="Course"){
		if($conCTsub=="1"){$data="3"; $fetSubP=" : RIGHT";}
		else if($conCTsub=="2"){$data="4"; $fetSubP=" : LEFT";}
		$setSub="&subPage=$conCTsub";
	}
	if($conCT=="Facilities"){
		if($conCTsub=="1"){$data="5"; $fetSubP=" : RIGHT";}
		else if($conCTsub=="2"){$data="6"; $fetSubP=" : LEFT";}
		$setSub="&subPage=$conCTsub";
	}
	if($conCT=="Contact"){$data="7";}
	
	
	$repage="index.php?content=$conCT$setSub";
	$dataEditer=getdata_editer($data);
	
?>
<script type="text/javascript">
function controlpanel(){	window.location="../../<?php echo $repage;?>";	}
function controlpanel1(){	CKEDITOR.instances.message.focus(); }
function controlpanel2(){	CKEDITOR.instances.message2.focus();}
function CheckData(){
	var Data1=document.getElementById('txt1').value;
	var TData1=Trim(Data1);
	
	var Data2=document.getElementById('txt2').value;
	var TData2=Trim(Data2);
	
	if(TData1.length==0 || TData1==""){
		alert("คำเตือน : ชื่อหัวข้อ Thai ไม่ได้กรอกข้อมูลค่ะ");
		document.getElementById('txt1').focus();
		return false;
	}
	else if(TData2.length==0 || TData2==""){
		alert("คำเตือน : ชื่อหัวข้อ Eng ไม่ได้กรอกข้อมูลค่ะ");
		document.getElementById('txt2').focus();
		return false;
	}
	else { return true;}
	
}
</script>
  <!-- TITLE -->
<div class="pageModuleTitle"><span class="glyphicon glyphicon-folder-open" style="font-size:28px; padding-right:5px;color:#F90"></span>
<?php echo   strtoupper($page.$fetSubP);?>
</div>
<div class="pageModuleSpace"></div>
<!-- END TITLE-->

 <div class="pageModuleTitle" style="font-size:19px;">
<form id="frmUpload1" action="<?php echo $path;?>form_Editer.php" method="post" enctype="multipart/form-data"  target="iframePath" onsubmit="return CheckData()">
 <input name="dbL" type="hidden" id="dbL" value="<? echo $database;?>">
 <input name="eID" type="hidden" id="eID" value="<?=$dataEditer['1'];?>">
 <input name="action" type="hidden" id="action" value="edit">
   <div class="row" style="padding-left:0px; padding-right:0px;">
 	    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; font-size:22px; color:#000; font-weight:bold; padding-top:15px;">
        	ชื่อ : Thai
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px;">
  <input id="txt1" name="txt1" type="text" class="form-control" placeholder="ชื่อหัวข้อ Thai" style="width:100%; height:40px;" value="<?=$dataEditer['2'];?>">
         </div>
  </div>
  
    <div class="row" style="padding-left:0px; padding-right:0px;">
 	    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; font-size:22px; color:#000; font-weight:bold; padding-top:15px;">
        	ชื่อ : Eng
        </div>
         <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px;">
<input id="txt2" name="txt2" type="text" class="form-control" placeholder="ชื่อหัวข้อ Eng" style="width:100%; height:40px;" value="<?=$dataEditer['3'];?>">         
         </div>
  </div>
 
 <div class="row" style="padding-left:0px; padding-right:0px;">
 	   <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; font-size:22px; color:#000; font-weight:bold; padding-top:15px;">
        	เนื้อหา : Thai
        </div>
       <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px;">
                     <textarea name="message" cols="100" rows="30" id="message"  style="width:100%;">
                     <?=$dataEditer['4'];?>
                      </textarea>
                 	<script type="text/javascript">
var editor = CKEDITOR.replace( 'message', { 
			height   : 650,
			
  filebrowserBrowseUrl : 'plugins/ckfinder/ckfinder.html',
  filebrowserImageBrowseUrl : 'plugins/ckfinder/ckfinder.html?type=Images',
  filebrowserFlashBrowseUrl : 'plugins/ckfinder/ckfinder.html?type=Flash',
  filebrowserUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
  filebrowserImageUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
  filebrowserFlashUploadUrl : 'plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>
              
       </div></div>
       
  <div class="row" style="padding-left:0px; padding-right:0px;">
 	    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px; font-size:22px; color:#000; font-weight:bold; padding-top:15px;">
        	เนื้อหา : Eng
        </div>
       <div class="col-xs-12 col-sm-12 col-md-12" style="padding-left:0px; padding-right:0px;">
                     <textarea name="message2" cols="100" rows="30" id="message2"  style="width:100%;" >
                     <?=$dataEditer['5'];?>
                      </textarea>
                 	<script type="text/javascript">
var editor = CKEDITOR.replace( 'message2', { 
			height   : 650,
			
    filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
</script>
              
       </div>
       
       <div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:10px;" align="left">
        <button type="submit" class="btn btn-default" style="background-color:#57a000; color:#FFF; width:200px; font-size:18px;"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> บันทึกข้อมูล</button>
       </div>
       
 </div>
</form>
</div>