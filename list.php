<?php include './head.php' ?>
		<style>
			.list {
				margin: 10px 1% 10px 1%;
				height: 150px;
				width: 98%;
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
		<?php include './header.php';
		include './db_info.php';
		
		$page_size = 10;
		$page_list_size = 5;
		if(!isset($_GET['no'])){
			$_GET['no'] = 0;
		} else {
			$no = $_GET['no'];
			if(!$no || $no < 0){
				$no = 0;
			}
		}
		$sql = "SELECT * FROM items LIMIT $no, $page_size";
		$result = mysqli_query($conn, $sql);
		$sql2 = "SELECT count(*) FROM items";
		$result_count = mysqli_query($conn,$sql2);
		$result_row = mysqli_fetch_row($result_count);
		$total_row = $result_row[0];
		if($total_row <= 0){
			$total_row = 0;
		}
		$total_page = ceil($total_row / $page_size);
		$current_page = ceil(($no+1)/$page_size);
		?>
		<!---EDITING STARTS--->
		
		
		<div class="content">
			<div class="inner">
				<div class="bodyframe">
				<?php
						while($row=mysqli_fetch_array($result)){
						echo '	<div class="list">
								<a style="height: 100%" class="list-group-item">
									<div style="padding: 0" class="col-md-3">
										<img style="border-radius: 13px; -moz-border-radius: 13px; -khtml-border-radius: 13px; -webkit-border-radius: 13px" width="100%" height="100%"	src="./img/induction.jpg">
									</div>
									<div class="col-md-6">
										<h1><p class="list-group-item-heading">'.$row['name'].'</p></h1>
										<h4><p class="list-group-item-heading">Seller: '.$row['seller'].'</p></h4>
										<h6>'.$row['content'].'</h6>
									</div>
									<div style="height: 100%; text-align: center" class="col-md-3">
										<h1 style="vertical-align: middle; line-height: normal" ><p class="list-group-item-heading">'.$row['price'].' HKD</p></h1>
										<form action="buy.php" method="get">
											<button type="submit">Buy</button>
											<button type="submit">Delete</button>
											<input type="hidden" name="key" value="'.$row['key'].'">
										</form>
									</div>
								</a>
								</div>';
						}
						mysqli_close($conn);
						$start_page = floor(($current_page -1) /$page_list_size) * $page_list_size + 1;
						$end_page = $start_page + $page_list_size -1;	
				?>
					<div class="col-md-3">
					<form action="sell.php" method="get">
						<button type="submit">Sell</button>
					</form>
					</div>
					<div class="col-md-9 controls">
					    <?php		
								if($total_page < $end_page){
									$end_page = $total_page;
								}
								if($start_page >= $page_list_size){
									$prev_list = ($start_page -2)*$page_size;
									echo '<div class="btn-group"><a href='. $_SERVER['PHP_SELF'].'?no='.$prev_list.'>
											<img src="./img/left.jpg" width="25px" height="25px">
										</a></div>';
								}
								for($i=$start_page;$i <= $end_page;$i++){
									$page =($i-1) * $page_size;
									if($no!=$page){
										echo '<a href='. $_SERVER['PHP_SELF'].'?no='.$page.'>';
									}
									echo '<button style="font-size: 120%; font-weight: bold" type="button" class="btn">'. $i .'</button>';
									
									if($no!=$page){
										echo "</a>";
									}
								}
								if($total_page > $end_page){
									$next_list = $end_page * $page_size;
									echo '<div class="btn-group"><a href='. $_SERVER['PHP_SELF'].'?no='.$next_list.'>
											<img src="./img/right.jpg" width="25px" height="25px">
										</a></div>';
								}
						?>
					</div>			
					</div>
				</div>	
			</div>
		</div>

		<?php include './footer.php' ?>