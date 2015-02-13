<?php
session_start();

$servername = 'localhost';
$db_username = 'root';
$db_password = '';
$db = 'hkust';
$update_message = "";
	$developer_name = $_POST['developername'];
	$personal_info = $_POST['personalinfo'];
	
	$dbc = mysqli_connect($servername, $db_username, $db_password, $db)
	or die('Error connecting to MySQL server.');
	
	$check_name_query = "SELECT developer_name FROM infos WHERE developer_name = '$developer_name'";
	$query_result = mysqli_query($dbc, $check_name_query);	
	
	if(mysqli_num_rows($query_result) == 1) {
		$update_query = "UPDATE infos SET personal_info = '$personal_info' WHERE developer_name = '$developer_name'";
		$update_query_result = mysqli_query($dbc, $update_query);
		$update_message = "Infos Successfully Updated!!";
	}
	else {
		$update_message = "Info Update Failed : Unknown Error!!";
	}
?>
<script>
	var JavaScriptAlert = <?php echo json_encode($update_message); ?>;
	alert(JavaScriptAlert);
	window.location.href = "info_members.php";
</script>
	
