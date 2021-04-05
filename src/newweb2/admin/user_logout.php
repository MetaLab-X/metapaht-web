<?
	session_start();
	session_destroy();
	echo "<script language='JavaScript' type='text/javascript'> window.parent.refreshPageInd();</script>"; 
?>