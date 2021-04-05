<?php
if($page=="About" || $page=="Mission" || $page=="Course" || $page=="Facilities" || $page=="Contact"){
	include "modules/editer/index.php";		
}
if($page=="Blog"){include "modules/article/index.php";}
if($page == "PageTitle" || $page == "ServiceTitle" || $page == "ProductTitle" || $page == "PortfolioTitle" || $page == "NewsTitle" ||$page == "ContactTitle" || $page=="CatalogueTitle"){ include "modules/title_page/index.php";}
if($page == "Category"){ include "modules/news/index.php";}
if($page == "List"){ include "modules/news/index.php";}
?>
