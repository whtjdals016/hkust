<?php
session_start();

$servername = 'localhost';
$db_username = 'root';
$db_password = '';
$db = 'hkust';

	$developer_name = $_POST['developername'];
	$personal_info = $_POST['personalinfo'];
	
	$dbc = mysqli_connect($servername, $db_username, $db_password, $db)
	or die('Error connecting to MySQL server.');
	
	$check_name_query = "SELECT developer_name FROM infos WHERE developer_name = '$developer_name'";
	$query_result = mysqli_query($dbc, $check_name_query);	
	
	if(mysqli_num_rows($query_result) == 1) {
		$update_query = "UPDATE infos SET personal_info = '$personal_info' WHERE developer_name = '$developer_name'";
	}
	else {
		$error = "Unknown Error";
	}
echo $error;
?>
	
