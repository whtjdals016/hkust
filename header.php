	</head>	
	<body>
		<header style="height: 102px">
			<a href="./index.php">
				<div class="logo">
				</div>
			</a>
			
			<div class="menu">
				<nav class="navigation">
					<ul>
						<!---href value set to html files due to conveniency--->
						<li><a href="./info.php">About Us</a></li>
						<li><a href="./list.php?no=0">Market</a></li>
						<li><a href="./news.php?no=0">News</a></li>
						<li><a href="./register.php">Register</a></li>
					</ul>
				</nav>
			</div>
			
			<div class="login_signup">
				<?php
					session_start();
					$_SESSION['former_page'] = $_SERVER['PHP_SELF'];
					if($_SESSION['former_page'] == '/news.php'){
						$_SESSION['former_page'] = '/news.php?no=0';
					} else if($_SESSION['former_page'] == '/list.php'){
						$_SESSION['former_page'] = '/list.php?no=0';
					}
					if(empty($_SESSION['login_user'])){
						echo 	'<nav class="login_signup_button_panel">
									<a href="#" class="login-button">Log In</a>
									<a href="#" class="signup-button">Sign Up</a>
								</nav>';
					}else{
						echo	'<nav class="login_signup_button_panel"><b>Welcome:  ' .$_SESSION['login_user'] .'   </b><a href="logout.php">Logout</a></nav>';
					}
				?>
			</div>
		</header>

	<!-- JS 부분 -->
		<div class="login-panel">
			<div class="inner">
				<div class="login-panel-close">
					
				</div>
				<div class="clearfix">
					<div class="col-1-2">login pic</div>
					<div class="col-1-2">
					<form class="login-form" action="login.php" method="post">
						<h3 style="text-align:center">Login to Malcha</h3>
						<div class="formholder">
							<input type="text" name="userid" placeholder="HKUST Username">
						</div>
						<div class="formholder">
							<input type="password" name="password" placeholder="Password">
						</div>
						<button id="login" type="submit" value="Login">
						Login
						</button>
					</form>
					</div>
				</div>
			</div>
		</div>