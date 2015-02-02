<?php include './head.php' ?>
		<style>
			#mainpic {
				height: 240px;
				width: 300px;
				border: 2px solid grey;
				margin: 50px 25px;
				padding:15px;
				float:left;
			}
			.product-info {
				margin: 20px 15px 0px 0px;
				float:right;
				table-layout:fixed;
			}
			caption{
				text-align:left;
			}
			th{
				text-align:left;
				width:100px;
				border-top: 1px solid rgb(204,204,204);
			}
			td{
				border-top: 1px solid rgb(204,204,204);
				width:250px;
			}
			.tprice{
				margin:30px 15px 0px 20px;
				float:right;
				background-color:rgb(204,204,204);
			}
			#tprice-td{
				width:60px; text-align:right;
			}
			#tprice-th{
				width:290px; text-align:right;
			}
			.buttons{
				clear:both;
				position:relative;
				top:-30px;
				left:520px;
				height:40px;
			}
			.product-detail{
				width: 750px;
				height:500px;
				margin: 25px;
				border-radius:30px;
				border: 2px dotted rgb(204,204,204);
			}
			#but1{
				background:rgb(255,77,77);
				color:white; height:40px;
				border-radius: 20px 20px;
			}
			#but2{
				background: rgb(54,194,191);
				color:white; height:40px;
				border-radius: 20px 20px;
			}
			#but3{
				height:40px;
				border-radius: 20px 20px;
			}
			#pdtitle{
				position:relative; text-align:center;
				margin: -20px 0px -35px 70px;
				background:rgb(237,237,237);
				width:130px; border-radius:20px 20px;
				border: 3px dotted rgb(204,204,204)
			}
		</style>
		<?php include './header.php' ?>
		<div class="content">
			<div class="inner">
				<div class="bodyframe">
					<aside>
						<img id="mainpic" src="./img/induction.jpg" alt="product image">
					</aside>
					
					<!--상품정보-->
					<table class="product-info" summary="product information">
					<caption><h1>Induction</h1></caption>
						<tr>
							<th>Price: </th>
							<td>100HKD</td>
						</tr>
						<tr>
							<th>Quantity: </th>
							<td><input type="number" min="1" max="10" value="1"></td>
						</tr>
						<tr>
							<th>Product Information</th>
							<td><textarea col="100" rows="5">Product information Product information Product information Product information Product information Product information </textarea></td>
						</tr>
					</table>
					
					<table class="tprice" summay="total price">
						<tr>
							<th id="tprice-th">Total Price: </th>
							<td id="tprice-td">100 HKD</td>
						</tr>
					</table>
					
					<!--버튼들-->
					<section class="buttons">
						<button type="submit" id="but1"><b>Purchase Online</b></button>
						<button type="button" id="but2"><b>Contact Seller</b></button>
						<button type="button" id="but3"><b>Back</b></button>
					</section>
					
					<h3 id=pdtitle>Product Detail</h3>
					<div class="product-detail">
						<img src="img1">
						<img src="img2">
					</div>
				</div>
			</div>
		</div>
				
		
		
	<?php include './footer.php' ?>