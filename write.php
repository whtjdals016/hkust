<?php
include './head.php' ?>
<link rel="stylesheet" href="./css/bootstrap.css">
<style>

</style>	
<?php include './header.php' ?>
	<div class="content">
		<div class="inner">
			<div class="bodyframe">
				<div style="padding-top:60px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
					</div>
                        <form class="form-horizontal" action="insert.php" method="post" role="form">
							<?php
							if(!empty($_SESSION['login_user'])){
								echo 	'	<div style="margin-bottom: 25px; width: 50%" class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
												<b class="form-control">' .$_SESSION['login_user'].'</b>
												<input type="hidden" name="userid" value="' .$_SESSION['login_user'].'">
											</div>  
							
											<div style="margin-bottom: 25px;width: 50%" class="input-group">
												<span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
												<b class="form-control">' .$_SESSION['login_user_sid']. '</b>
												<input type="hidden" name="sid" value="' .$_SESSION['login_user_sid'].'">
											</div>';
							}else{
								echo	'<div style="margin-bottom: 25px; width: 50%" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="userid" value="" placeholder="username"> 
										</div>  
							
										<div style="margin-bottom: 25px;width: 50%" class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input id="login-username" type="text" class="form-control" name="sid" value="" placeholder="Student ID"> 
										</div>';
							}
							?>

									
							<div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                <input id="form-control" type="text" class="form-control" name="title" placeholder="Please insert title">
                            </div>
							
							<div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-left"></i></span>
                                <textarea id="form-control" rows="10" class="form-control" name="content" placeholder="Please insert body text"></textarea>
                            </div>
							
                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                    <input type="Submit" value="Post" style="font-size: 120%; font-weight: bold" id="btn-save" class="btn btn-primary">
                                    <a id="btn-back" href="news.php" class="btn">Back</a>
                                </div>
                            </div>
                                
							<div class="form-group">
                                <div class="col-md-12 control">
                                    <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            ©부스트랩 사용 예제: 졸려..
										<a href="http://getbootstrap.com/components/">
												Check out Bootstrap Components
										</a>
                                    </div>
                                </div>
                            </div>    
                        </form>     
                </div>                        
			</div>
		</div>
	</div>
<?php include './footer.php' ?>