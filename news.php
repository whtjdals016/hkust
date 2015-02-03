<?php include './head.php'; ?>
<link rel="stylesheet" href="./css/bootstrap.css">
<style>

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

$sql = "SELECT * FROM news LIMIT $no, $page_size";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT count(*) FROM news";
$result_count = mysqli_query($conn,$sql2);
$result_row = mysqli_fetch_row($result_count);
$total_row = $result_row[0];

if($total_row <= 0){
	$total_row = 0;
}

$total_page = ceil($total_row / $page_size);
$current_page = ceil(($no+1)/$page_size);
?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
				<div class="list-group">
					<a style="padding-bottom: 25px" class="list-group-item active">
						<div class="col-md-1">
							<h4 class="list-group-item-heading">ID</h4>
						</div>
						<div class="col-md-6">
							<h4 class="list-group-item-heading">TITLE</h4>
						</div>
						<div class="col-md-3">
							<h4 class="list-group-item-heading">DATE</h4>
						</div>
						<div class="col-md-2">
							<h4 class="list-group-item-heading">Author</h4>
						</div>
					</a>
					<?php
						while($row=mysqli_fetch_array($result)){
						echo '	<a style="padding-bottom: 25px" class="list-group-item">
									<div class="col-md-1">
									<h4 class="list-group-item-heading">'.$row['key'].'</h4>
								</div>
								<div class="col-md-6">
									<p class="list-group-item-heading">'.$row['title'].'</p>
								</div>
								<div class="col-md-3">
									<p class="list-group-item-heading">'.$row['wdate'].'</p>
								</div>
								<div class="col-md-2">
									<h4 class="list-group-item-heading">'.$row['id'].'</h4>
								</div>
							</a>';
						}
						mysqli_close($conn);
						$start_page = floor(($current_page -1) /$page_list_size) * $page_list_size + 1;
						$end_page = $start_page + $page_list_size -1;
					?>
					<div style="margin-top:10px" class="form-group">
                       	<div class="col-md-3 controls">
                            <a href="write.php" style="font-size: 120%; font-weight: bold" id="btn-save" class="btn btn-primary">Write</a>
                        </div>
						<div class="col-md-3 controls">
                            <a href='' class="btn"></a>
                        </div>
						<div class="col-md-6 controls">
                            <?php		
								if($total_page < $end_page){
									$end_page = $total_page;
								}
								if($start_page >= $page_list_size){
									$prev_list = ($start_page -2)*$page_size;
									echo '<div class="btn-group"><a href='. $_SERVER['PHP_SELF'].'?no='.$prev_list.'>
										<button style="font-size: 120%; font-weight: bold" type="button" class="btn btn-primary"><</button>
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
										<button style="font-size: 120%; font-weight: bold" type="button" class="btn btn-primary">></button>
										</a></div>';
								}
							?>
						</div>
                    </div>
				</div>                       
			</div>
		</div>
	</div>
<?php include './footer.php' ?>