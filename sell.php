<?php include './head.php' ?>
<style>

</style>	
<?php include './header.php' ?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
				<h4>Select files from your computer</h4>
				  <form action="sell_check.php" method="post" enctype="multipart/form-data" id="js-upload-form">
					<div class="form-inline">
					  <div class="form-group">
						<input type="file" name="fileToUpload" id="fileToUpload">
					  </div>
					  <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>
					</div>
				  </form>
			</div>
		</div>
	</div>
<?php include './footer.php' ?>