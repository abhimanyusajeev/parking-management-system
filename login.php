<?php
session_start();
if(isset($_SESSION['user_id'])){
	header('location:index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management Homepage</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background:#ffffb3;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
	padding-bottom: 10%;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}
.create a:hover {
	color: #ff0000;
	
	
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
	padding-top: 5%;
}

form {
	background-color: rgb(255, 255, 255);;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color:  rgb(255, 255, 255);;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
}

.log-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}


.overlay-container {
	text-align: center;

}


.overlay {
	background:rgb(8, 8, 75);
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
}


.overlay-right {
	right:20;
	
}


.social-container {
	margin: 50px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}
.overlay-panel img{
	width: 40%;
	height: 50%;
	margin-left: 50%;
}
    </style>
</head>
<body>
    <div class="container" id="container">
		<div class="form-container log-in-container">
			<form action="#" method="POST">
				<h1>Login or signup</h1>
				<input type="email" placeholder="Email" name="email" />
				<input type="password" placeholder="Password" name="password" />
				<a href="#">Forgot your password?</a>
				<a class="create" href="signup.php">Create an account?</a>

				<button type="submit" name="btn" >Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
			</div>
		</div>
	</div>
	<div class="overlay-panel">
					<img src="kbfclogo.png" alt="isl login image">
				</div>
</body>
<?php
if(isset($_POST['btn'])){
	$conn = mysqli_connect("localhost","root","","parking_manager");
	if(!$conn){
		die();
	}else{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE user_email='$email'";
		$retval = mysqli_query($conn,$sql);
		if(!$retval){
			die("<script>alert('no records')</script>");
		}else{
			$row = mysqli_fetch_array($retval);
			if(!$row){
				die("<script>alert('Invalid Credentials')</script>");
			}else{
				if($password==$row['user_password']){
					$_SESSION['user_id'] = $row['user_id'];
					$_SESSION['user_name'] = $row['user_name'];
					header('location:index.php');

				}else{
					echo "<script>alert('Invalid Credentials')</script>";
				}
			}
		}
	}
}
?>
</html>