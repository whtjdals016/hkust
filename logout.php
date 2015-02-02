<?php
	session_start();
	$former_page = $_SESSION['former_page'];
	if(session_destroy()){
		header("Location: $former_page");
	}
?>