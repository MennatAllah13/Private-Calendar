<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			body 
			{
				margin: 0;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			.image 
			{
				background-image: url("meeting.jpg");
				height: 700px;
				background-position: center;
				background-size: cover;
				position: relative;
			}
			
			.form {
				position: fixed;
				bottom: 0;
				right: 15px;
				border: 3px solid #f1f1f1;
				z-index: 9;
			}

			.form-container {
				max-width: 300px;
				padding: 10px;
				background-color: white;
			}

			.form-container input[type=text], .form-container input[type=password] {
				width: 100%;
				padding: 15px;
				margin: 5px 0 22px 0;
				border: none;
				background: #f1f1f1;
			}

			.form-container input[type=text]:focus, .form-container input[type=password]:focus {
				background-color: #ddd;
				outline: none;
			}

			.form-container .btn {
				background-color: #4CAF50;
				color: white;
				padding: 16px 20px;
				border: none;
				cursor: pointer;
				width: 100%;
				margin-bottom:10px;
				opacity: 0.8;
			}

			.form-container .btn:hover, .open-button:hover {
				opacity: 1;
			}
		</style>
	</head>
	<body>
		<div class="image">
			<div class="form" id="myForm">
				<form action="" method="post" class="form-container">
					<h1>Login</h1>
					
					<label for="username"><b>Username</b></label>
					<input type="text" placeholder="Enter username" name="name" required>
					
					<label for="password"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="password" required>
					
					<button type="submit" name="submit" class="btn">Login</button>
				</form>
			</div>
		</div>
	</body>
</html>

<?php
	include_once "userClass.php";
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$password=$_POST['password'];
		$x=User::login($name,$password);
		$dep = $x->User_Type->Name;
		echo "<script type='text/javascript'>alert('$dep');</script>";
		if($dep=="Admin"){
			header("Location:Admin.php");
		}
		else if($dep=="Employer"){
			header("Location:Employer.php");
		}
	}
?>