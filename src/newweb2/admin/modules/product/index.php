<?php
	$database="tb_customer";
	$data=$_REQUEST['view'];
	if($data==""){$data="1";}
	$conCT=$_REQUEST["content"];
	$addAction=$_REQUEST["subpage"];
	$Type=$_REQUEST['type'];
	$Sort=$_REQUEST['sort'];

	$datapage="modules/product";
	$path="modules/product/";
	$pathDel="modules/product/function/delete.php";

	$repage="index.php?content=$conCT";
	include $path."function/function.php";

	$product=product_list($Type, $Sort);


?>
 <div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">

<?php
	if($addAction==""){include "product.php";}
	if($addAction=="editKeyword"){include "edit_keyword.php";}
?>
</div>
</div>
