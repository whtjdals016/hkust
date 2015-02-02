<?php include './head.php' ?>
		<style>
			.list {
				margin: 1%;
				height: 19%;
				width: 96%;
				border: 1px solid #626262;
				border-radius: 3px;
				display: block;
			}
			.listfooter {
				margin: 1%;
				height: 10%;
				width: 96%;
				display: block;
			}
			.arrows {
				float:left;
				height: 100%;
				display: inline;
			}
			.listfooter ul {
				float: left;
				padding: 10px;
				margin: 0px;
			}
			.listfooter li {
				display: inline;
				font-color: black;
				font-size: 19px;
			}
			.listfooter button {
				float: right;
				margin-top: 10px;
				padding: 3px;
				margin-left: 5px;
			}
		</style>
		<?php include './header.php' ?>
		<!---EDITING STARTS--->
		
		
		<div class="content">
			<div class="inner">
				<div class="bodyframe">
					<div class="list">

					</div>
					<div class="list">
					</div>
					<div class="list">
					</div>
					<div class="list">
					</div>			
					<div class="listfooter">
					<!---ARROW IMAGE WILL BE REPLACED--->
					<div class="arrows">
						<ul>
							<li><a href="#"><img src="./img/left.jpg" width="25px" height="25px"></a></li>
							<li><a href="#"><img src="./img/right.jpg" width="25px" height="25px"></a></li>
						</ul>
					</div>
					<button type="button">Sell</button>
					<button type="button">Delete</button>
					<button onclick="location.href='./buy.php'"type="button">Buy</button>
					</div>
				</div>	
			</div>
		</div>

		<?php include './footer.php' ?>