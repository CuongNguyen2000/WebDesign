<!DOCTYPE html>
<html>
<head>
	<title>Login as administrator</title>
	<link rel="stylesheet" type="text/css" href="styleCSS/CSS_login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="wrap">
	<div id="form-login">
		<form action="" method="post">
			<h2>Login as Administrator</h2>
			<div class="InputWithIcon">
				<i class="fa fa-user" aria-hidden="true"></i>
				<input type="text" name="txtusername" placeholder="Enter username" id="txtusername" required="">
			</div>
			<div class="InputWithIcon">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<input type="password" name="txtpassword" placeholder="Enter password" id="txtpassword" required="">
			</div>
			<input type="submit" name="login" id="btn-login" value="Login">
		</form>
	<?php  
	session_start();
	$link = new mysqli('localhost','root','','storeman') or die('Connection Failed');
	if (isset($_POST['login']) && $_POST['txtusername'] != '' && $_POST['txtpassword'] != '') 
	{
		$un = $_POST['txtusername'];
		$pw = $_POST['txtpassword'];
		$sql = "Select * from account where Username = '$un' and Password = '$pw'";
		$result = mysqli_query($link,$sql);
		if (mysqli_num_rows($result)>0) {
			$_SESSION['username'] = $un;
			header("Location: Admin_product.php");
		}else{
			echo ('<div style="text-align:center"><h3 style="color:#F4122D; font-family: Trebuchet MS;">Username or Password is not correct</h3></div>');
		}
	}
	?>
	</div>
</div>
</body>
</html>