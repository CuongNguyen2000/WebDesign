<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="wrap">
		<div id="form-register">
			<form action="" method="post">
				<h2>Register account</h2>
				<div class="InputWithIcon">
					<input type="text" name="userID" placeholder="Enter your ID" id="txtuserID">
				</div>
				<div class="InputWithIcon">
					<i class="fa fa-user" aria-hidden="true"></i>
					<input type="text" name="username" placeholder="Enter username" id="txtusername">
				</div>
				<div class="InputWithIcon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					<input type="password" name="pass" placeholder="Enter password" id="txtpassword">
				</div>
				<input type="submit" name="Register" id="btn-register" value="submit">
				<div style="text-align: center; font-family: Trebuchet MS;">OR already have an account</div></form>
				<a href="http://localhost:8080/ASM2-WebDesign/Login_user.php">
					<input type="submit" name="Register" id="btn-register" value="Login">
				</a>
			</form>
			<?php
				require_once("./Database.php");
				if (isset($_POST['username']) && isset($_POST['pass']) && isset($_POST['userID'])) 
				{
					$userID=$_POST['userID'];
					$user=$_POST['username'];
					$pass=$_POST['pass'];
					if ($userID == "" || $user == "" || $pass == "") {
				   		echo ('<div style="text-align:center">
				   				<h3 style="color:#F4122D; font-family: Trebuchet MS;">Please enter full information</h3>
				   			</div>');
  					}else{
  						$sql="select * from users where username='$user'";
						$rows=query($sql);
							if($rows  > 0){
							echo ('<div style="text-align:center"><h3 style="color:#F4122D; font-family: Trebuchet MS;">Account is already exsist</h3></div>');
							}else{
								$sql = "Insert Into users values (".$userID.",'".$user."', '".$pass."')";
							//echo $sql;
							if(execsql($sql))
							{
								echo ('<div style="text-align:center"><h3 style="color:#F4122D; font-family: Trebuchet MS;">Addition account successfully</h3></div>');
							}else
							{
								echo ('<div style="text-align:center"><h3 style="color:#F4122D; font-family: Trebuchet MS;">Addition account failed</h3></div>');
							}
						}
					}
				}
			?>
		</div>
	</div>

</body>
</html>