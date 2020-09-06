<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>add a user</title>
	</head>
	
	<style type="text/css">
		body
		{
			background-size: cover;
			width: 100vw;
			height: 80vh;
			display: grid;
			align-items: center;
			justify-items: center;
			font-size: 20px;
			font-family:Times Roman;
	</style>
	
	<style type="text/css">
		.Reservation 
		{
			display: none;
		}
	</style>
	
	<body>
		<h1>Add an Event</h1>
		<form name="myform" method="post" align ="center"style="border-style:double;background-color:#DEB887;width:700px;height:550; ">
			<h1>Add User</h1> <br>
			
			<label for="username"><b>Username</b></label>
			<input type="text" placeholder="Enter username" name="name" required>
			
			<label for="password"><b>Password</b></label>
			<input type="text" placeholder="Enter password" name="password" required>
			
			<label for="userType"><b>User Type</b></label>
			<input type="text" placeholder="Enter user type" name="userType" required>
			
			<button type="submit" name="submit" class="btn">submit</button>
		</form>
	</body> 
</html>

<?php
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$userType=$_POST['userType'];
		
		$x=Admin::deleteUser($username,$password,$userType);
	}
?>
