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
			.sec{
				display: none;
			}
		</style>
	</head>
	<body>
		<div class="form" id="myForm">
			<form action="" method="post" class="form-container">
				<h1>Welcome</h1>
				<button type="submit" name="AddUser">Add User</button>
				<button type="submit" name="DeleteUser">Delete User</button>
			</form>
		</div>
	</body>
</html>

<?php
	if(isset($_POST['AddUser']))
	{
		header("Location:AddUser.php");
	}
	else if(isset($_POST['DeleteUser']))
	{
		
	}
?>