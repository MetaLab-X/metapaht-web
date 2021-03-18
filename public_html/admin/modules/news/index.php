<?php
error_reporting(0);
$database="news";
$data=$_REQUEST['view'];
if($data==""){$data="1";}
$conCT=$_REQUEST["content"];
$addAction=$_REQUEST["subpage"];
$categoryID=$_REQUEST['catID'];

$datapage="modules/news";
$path="modules/news";
$pathDel=$path."delete.php";

$repage="index.php?content=$conCT&view=$data&catID=$categoryID";
?>
<div class="row">
	
	
	<div class="col-xs-12 col-sm-12 col-md-12" style="font-size:20px;">
		
		<?php
		if($data=="1")
		{
			$database="new_category";
			$pathEdit="index.php?content=News&view=$data&subpage=editCat&editID=";
			$pathBack="index.php?content=News&view=$data";
			if($addAction!="editCat"){include $path."/"."category/index.php";}
			else if($addAction=="editCat"){ include "cat_edit.php";}
		}
		else if($data=="2")
		{
			$database="news";
			$pathBack="index.php?content=News&view=$data";
			if($addAction==""){include $path."/"."brand/index.php";}
		}
		
		else if($data=="3")
		{
			$database="news";
			$mainTitle="NEWS & EVENT";
			$pathEdit="index.php?content=List&view=$data&subpage=edit&editID=";
			$pathBack="index.php?content=List&view=$data";
			$pathAdd="index.php?content=List&view=$data&subpage=add";
			if($addAction==""){include $path."/"."product/index.php";}
			else if($addAction=="edit"){include $path."/"."product/edit.php";}
			else if($addAction=="add"){include $path."/"."product/add.php";}
		}
		
	/*if($addAction==""){include "article_cat.php";}
	if($addAction=="addSlide"){include "article_cat.php";}
	if($addAction=="editSlide"){include "article_cat.php";}*/
	?>    
</div>
</div>