<?php include './head.php' ?>
<style>
	.changeinfo {
		margin: auto;
		margin-left: 100px;
	}	
	}
</style>	
<?php include './header.php' ?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
				<div class="changeinfo">
					<form class="change_info" action="info_update.php" method="post">
						</br>
						<h1>Change Info</h1>
						<label for="developername">Developer Name : </label>
						<select multible="multiple" id="developername" name="developername">
							<option>JihyokKIM</option>
							<option>JangBackLEE</option>
							<option>JungHongKIM</option>
							<option>JaeMinSHIN</option>
							<option>NayeonLEE</option>
							<option>SungMinCHO</option>
						</select></br></br>
						<label for="personalinfo">Personal Info : </label></br>
						<textarea rows="10" cols="80" id="personalinfo" name="personalinfo"></textarea></br>
						<input type="submit" id="submit" name="submit"></input>
					</form>
				</div>
			</div>
		</div>
	</div>
<?php include './footer.php' ?>