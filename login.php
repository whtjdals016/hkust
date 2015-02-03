<?php 
session_start();
$error = '';
//set db variables for localhost
$servername = 'localhost';
$db_username = 'root';
$db_password = '1q2w3e4r!';
$db = 'hkust';

	//get inserted value from header.php or index.html
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	//prevent mySQL injections
	//$userid = stripcslashes($userid);
	//$password = stripcslashes($password);
	//$userid = mysql_real_escape_string($userid);
	//$password = mysql_real_escape_string($password);
	
	//establishing connections, choosing DB, searching for ID and PW
	$conn = mysqli_connect($servername, $db_username, $db_password, $db);
	if(!$conn) {
		die("Connection Failed: " . mysqli_connect_error());
	}
	
	$sql = "SELECT id,pw,sid FROM members WHERE id='$userid' AND pw='$password'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result) == 1){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['login_user'] = $userid;
		$_SESSION['login_user_sid'] = $row['sid'];
		mysqli_close($conn);
		header('Location: '.$_SESSION['former_page']);
	} else {
		$error = "username or password is invalid";
	}
echo $error;
?>