<?php
	include "db_info.php";
	
	$userid = $_POST['userid'];
	$sid = $_POST['sid'];
	$title = $_POST['title'];
	$content = $_POST['content'];
	$mysqltime = date("Y-m-d H:i:s", time());
	
	$sql = "INSERT INTO news(id, sid, title, content,wdate) VALUES ('$userid',$sid,'$title','$content','$mysqltime')";
	if (mysqli_query($conn, $sql)) {
		mysqli_close($conn);
		echo("<meta http-equiv='Refresh' content='1; URL=news.php?no=0'>");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
?>
	
	