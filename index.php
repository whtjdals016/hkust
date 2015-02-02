<?php include './head.php' ?>
		<style>
			.ads-box {
				margin: 1%;
				border: 2px solid #b7b7b7;
				border-radius: 4px;
				height: 290px;
			}
			
			.ads {
				border: 2px solid #b7b7b7;
				border-radius: 4px;
				margin: 1%;
				box-sizing: border-box;
				background: gray;
			}
			
			.main-box{
				height: 400px;
				margin: 1%;
				border: 2px solid #b7b7b7;
				border-radius: 4px;
				background: white;
			}
						
			section {
				display: inline-block;
				width: 29%;
				margin: 1%;
				border: 2px solid #b7b7b7;
				border-radius: 4px;
				background: gray;
				height: 96%
			}
			
			aside {
				display: inline-block;
				width: 65%;
				margin: 1%;
				border: 2px solid #b7b7b7;
				border-radius: 4px;
				background: gray;
				height: 96%
			}
			
			#img1,
			#img2,
			#img3 {
				height: 41%;
				width: 31%;
			}

			#img4,
			#img5 {
				height: 45%;
				width: 47.5%;
			}
		</style>
		<?php include './header.php' ?>
		
		<div class="content">
			<div class="inner">
				<div class="bodyframe">
				<!--Editing Starts Here-->
					<!--JASON'S EDIT (1~3)-->
					<!-- 1: clearfix class was added below (refer to css codes for details)-->
					<div class="ads-box clearfix">
						<img class="ads" id="img1" src="./img/1.jpg">
						<img class="ads" id="img2" src="./img/2.jpg">
						<img class="ads" id="img3" src="./img/3.jpg">
						<img class="ads" id="img4" src="./img/4.jpg">
						<img class="ads" id="img5" src="./img/5.jpg">
					</div>
					<div class="main-box">
						<section>
							<h1>Section</h1>
						</section>
						<aside>
							<h1>Aside</h1>
						</aside>
					</div>

					<!-- 2: selectors for a new class called clearfix were added to contain floats.
					Dynamically created elements above and below the elements named clearfix class -->
					<style>
						.clearfix:before,
						.clearfix:after {
							content: "";
							display:table;
						}
						.clearfix:after {
							clear:both;
						}
						.clearfix {
							clear:both;
						}

						/* 3: The codes below go with the respective selectors in the css within the header.*/
						/*  Added to equalize spacing between ads and ads-box */
						.ads-box{
							padding: 1%;
						}
						.main-box{
							padding: 1%;
						}

					</style>

				<!--Editing Ends Here-->
				</div>
			</div>
		</div>
				
	<?php include './footer.php' ?>
