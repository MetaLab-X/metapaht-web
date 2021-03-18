<?php
	session_start();
	include "libraries/config/config.php";
	$data=$_REQUEST['view'];
	if($data==""){$data="1";}
	$conCT=$_REQUEST["content"];
	$addAction=$_REQUEST["subpage"];

	$datapage="modules/invoice/";
	$path="modules/invoice/";
	$pathDel="modules/invoice/function/delete.php";

	$repage="index.php?content=$conCT";
	include $path."function/function.php";

	$invoiceData=invoice_list();


?>
 <div class="row">


    <div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">

<?php
	if($addAction==""){include "invoice.php";}
	if($addAction=="Add_Invoice"){include $path."add/index.php";}
	if($addAction=="Edit_Invoice"){include $path."edit/index.php";}
?>
</div>
</div>
