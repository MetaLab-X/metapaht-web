<?php
//error_reporting(0);
$database="tb_settingtitle_page";
$data=$_REQUEST['view'];
if($data==""){$data="1";}
$conCT=$_REQUEST["content"];
$addAction=$_REQUEST["subpage"];

$datapage="modules/title_page";
$path="modules/title_page/";
$pathDel=$path."delete.php";

$repage="Admin_Panel.php?content=$conCT";
include $path."function_Slide.php";
//$dataSlide=Get_Value($data);


?>
<div class="row">
	
	
	<div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">
		
		<?php
		if($addAction==""){include "edit_Slide.php";}
		if($addAction=="addSlide"){include "add_Slide.php";}
		if($addAction=="editSlide"){include "edit_Slide.php";}
		?>    
	</div>
</div>