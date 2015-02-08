<?php include './head.php' ?>
<style>

</style>	
<?php include './header.php' ?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
				<form action="sell_check.php" method="post" enctype="multipart/form-data">
					Select image to upload:
					<input type="file" name="fileToUpload" id="fileToUpload">
					<input type="submit" value="Upload Image" name="submit">
				</form>
			</div>
		</div>
	</div>
<?php include './footer.php' ?>