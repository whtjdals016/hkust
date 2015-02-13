<?php include './head.php' ?>
<style>

#cont_but{
	background:rgb(255,77,77);
	color:white; height:40px;
	border-radius: 20px 20px;
	position:relative;
	top:100px;
	left:320px;
	height:40px;
}

.salutation{
	width: 750px;
	height:300px;
	margin: 25px;
	border-radius:30px;
	border: 2px dotted rgb(204,204,204);
}
.message{
	text-align:center;
}
</style>	

<?php 
	include './header.php';
	include './db_info.php';
	
	$key=$_POST['key'];
	
	// sql to delete a record
	$sql = "DELETE FROM items WHERE `key`=$key";

	if ($conn->query($sql) === TRUE) {
		echo "Record deleted successfully";
	} else {
		echo "Error deleting record: " . $conn->error;
	}
	
	
?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
			
			<div class="salutation">
				<h1 id="message">Thank you for purchasing the product!</h1>	
				<h3 id="message"> See you next time </h3>
			
				<form action="list.php">
					<button type="submit" id="cont_but"><b>Continue shopping</b></button>
				</form>
			</div>
			
			</div>
		</div>
	</div>
<?php include './footer.php' ?>