<?php
		
		/*$host="localhost";
		$username="root";
		$password="123456";
		$db="01_metapaht";
		//*/


		
	 	$host="localhost";
		$username="metapaht_base";
		$password="fB0TSbeU";
		$db="metapaht_base";
		//*/
		$con=mysql_connect("$host","$username","$password");
		$con_db=mysql_select_db("$db");
		mysql_query("SET character_set_results=utf8");
		mysql_query("SET character_set_client=utf8");
		mysql_query("SET character_set_connection=utf8");
?>
