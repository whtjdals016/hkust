<?php
	session_start();
	$former_page = $_SESSION['former_page'];
	if($former_page == '/news.php'){
		$former_page = '/news.php?no=0';
	}
	if(session_destroy()){
		//echo $former_page;
		header("Location: $former_page");
	}
?>