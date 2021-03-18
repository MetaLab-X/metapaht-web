<?php
	$database="tb_customer";
	$data=$_REQUEST['view'];
	if($data==""){$data="1";}
	$conCT=$_REQUEST["content"];
	$addAction=$_REQUEST["Type"];
	
	$sort=$_REQUEST['sort'];

	$datapage="modules/zone/";
	$path="modules/zone/";
	$repage="index.php?content=$conCT";
	
	$pathDel=$path."function/delete.php";
	include $path."/function/function.php";

	$Zonedata=get_zoneList($sort);


?>
 <div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">

<?php
	if($addAction==""){include "zone.php";}
	if($addAction=="Information_Zone"){include "information_zone.php";}
?>
</div>
</div>
