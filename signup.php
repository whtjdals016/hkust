<?php
	include "db_info.php";
	
	$userID = $_POST['uid']; 
	$password = $_POST['password']; 
	$SID = $_POST['sid']; 
	$firstName = $_POST['first_name']; 
	$lastName = $_POST['last_name']; 
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$query = "INSERT INTO members (id, pw, sid, firstname, lastname, email, phone) 
			  VALUES ('$userID', '$password', '$SID', '$firstName', '$lastName', '$email','$phone')"; 

	if (mysqli_query($conn, $query)) {
		mysqli_close($conn);
		echo("<meta http-equiv='Refresh' content='1; URL=index.php?no=0'>");
	} else {
		echo "Error: " . $query . "<br>" . mysqli_error($conn);
	}
?>
	
	
