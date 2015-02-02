<?php include './head.php' ?>
	<style>
      .signup {
               height:1000px;
               margin-left: 200px;
               margin-right: 200px;
               background: #EFEFEF;
      }
    </style>
<?php include './header.php' ?>
		<div class="content">
			<div class="inner">
				<div class="bodyframe">
					<div class="signup">
						<table style="margin:auto">
						  <thead>
						<tr>
						  <th> <h1 style="text-align:left">Register</h1> </th>
						</tr>
						  </thead>
						  <tr>
						<td>Name</td>
						<td><input type="text" name="user_name" /></td>
						  </tr>
						  <tr>
						<td><br/>ID</td>
						<td><br/><input type="text" name="user_id" /></td>
						  </tr>
						  <tr>
						<td><br/>Password</td>
						<td><br/><input type="password" name="user_pw" /></td>
						  </tr>
						  <tr>
						<td><br/>Re-check Password</td>
						<td><br/><input type="password" name="user_pwc" /></td>
						  </tr>	   
						  <tr>
						<td><br/>HKUST SID</td>
						<td><br/><input type="text" name="user_sid" placeholder="ex) 20141234" /></td>
						  </tr>
						  <tr>
						<td><br/>Student Email</td>
						<td><br/>
						  <input type="email" name="email" placeholder="example@ust.hk"></td>
						  </tr>
						  <tr>
						<td><br/>Phone Number</td>
						<td><br/>
						  <input type="phone" name="phone" placeholder="ex) 98765432"></td>
						  </tr>
						  <tr>
						<td><br/></td>
						<td style = "text-align:right"><br/><input type="submit" name="submit" value="Submit" /></td>
						  </tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	<?php include './footer.php' ?>
