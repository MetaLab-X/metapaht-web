<?php
error_reporting(0);
$database="tb_setting_index";
$data=$_REQUEST['view'];
// if($data==""){$data="1";}
$conCT=$_REQUEST["content"];
$addAction=$_REQUEST["subpage"];

$datapage="modules/title_index";
$path="modules/title_index/";
$pathDel=$path."delete.php";

$repage="Admin_Panel.php?content=$conCT";
include $path."function_Slide.php";
//$dataSlide=Get_Value($data);


?>
<div class="row">
	
	
	<div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">
		
		<?php

		if($addAction==""){
			if($data == ""){
				include "edit_Slide.php";
			}if($data!=""){

				include "edit_Slide2.php";
			}
		}
		// if($addAction=="addSlide"){include "add_Slide.php";}
		// if($addAction=="editSlide"){include "edit_Slide.php";}
		?>    
	</div>
</div>