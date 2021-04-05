<?php
	$database="tb_customer";
	$data=$_REQUEST['view'];
	if($data==""){$data="1";}
	$conCT=$_REQUEST["content"];
	$addAction=$_REQUEST["subpage"];
	
	$TypeS=$_REQUEST["Type"];
	$action=$_REQUEST["action"];
	$sort=$_REQUEST["sort"];
	$textsearch=$_REQUEST["textsearch"];
	
	$datapage="modules/customer/";
	$path="modules/customer/";
	$pathDel="modules/customer/function/delete.php";
	$pathUpdate="modules/customer/function/update.php";

	$repage="index.php?content=$conCT";
	include $path."function/function.php";

	$dataCustomer=customer_list($TypeS, $sort, $action,$textsearch);


?>
 <div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">

<?php
	if($addAction==""){include "customer.php";}
	if($addAction=="editKeyword"){include "edit_keyword.php";}
?>
</div>
</div>
