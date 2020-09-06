<?php
	Class User
	{
		public $ID;
		public $Name;
		public $Password;
		public $User_Type;
		
		function __construct($ID)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="select * from user where id=".$ID;
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->ID=$row[0];
				$this->Name=$row[1];
				$this->Password=$row[2];
				$this->User_Type=new User_Type($row[3]);
			}
		}
		
		static function login($username,$password)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="select * from user where name='$username' and password='$password'";
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				return new User($row[0]);
			}
		}
	}
	
	Class Admin extends User
	{
		function addUser($username,$password,$userType)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="insert into user (name,password,userType) values('$username','$password','$userType')";
			$result=mysqli_query($con,$sql);
			if($result === true)
			{
				$m="successfully added";
				echo "<script type='text/javascript'>alert('$m');</script>";
			} else
			{
				$m="failed";
				echo "<script type='text/javascript'>alert('$m');</script>";
			}
		}
		
		function deleteUser($id)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="delete from user where id=$this->id;";
			$result=mysqli_query($con,$sql);
			if($result === true)
			{
				$m="successfully deleted";
				echo "<script type='text/javascript'>alert('$m');</script>";
			} else
			{
				$m="failed";
				echo "<script type='text/javascript'>alert('$m');</script>";
			}
		}
	}
	
	Class Employer
	{
		function addEvent($title,$description,$numOfParticipaants,$room,$day,$month,$startTime,$endTime)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="insert into event (title,description,numOfParticipaants,day,month,startTime,endTime)
				values('$title','$description','$numOfParticipaants','$day','$month','$startTime','$endTime')";
			$result=mysqli_query($con,$sql);
			if($result === true)
			{
				$m="successfully added";
				echo "<script type='text/javascript'>alert('$m');</script>";
			} else
			{
				$m="failed";
				echo "<script type='text/javascript'>alert('$m');</script>";
			}
		}
		
		function deleteEvent($id)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="delete from event where id=$this->id;";
			$result=mysqli_query($con,$sql);
			if($result === true)
			{
				$m="successfully deleted";
				echo "<script type='text/javascript'>alert('$m');</script>";
			} else
			{
				$m="failed";
				echo "<script type='text/javascript'>alert('$m');</script>";
			}
		}
	}
	
	Class User_Type
	{
		public $ID;
		public $Name;
		
		function __construct($ID)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="select * from user_Type where id=".$ID;
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->ID=$row[0];
				$this->Name=$row[1];
			}
		}
	}
?>
