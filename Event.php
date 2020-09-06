<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<title>add an event</title>
		
		<script>
			function validateform()
			{
				var p=document.forms["myform"]["rc"].value;
				if(p<=10){
					alert('Your event is at room number 1')
				}
				else if (p<=20 && p>=10){
					alert('Your event is at room number 2')
				}
				else if (p<=50 && p>=20){
					alert('Your event is at room number 3')
				}
				else if (p<=100 && p>=50){
					alert('Your event is at room number 4')
				}

			}
		</script>


		<script type="text/javascript">
			$(document).ready(function()
			{
				$("#room").click(function()
				{
					$(".num").show();
					$(".N").show();
				});
				
				$("#noroom").click(function()
				{
					$(".num").hide();
					$(".N").hide();
				});
			});
		</script>
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
		.num {
			display: none;
		}
		form{
			display: inline-block;
		}

		.N{
			display: none;
			align-items: center;
		}
	</style>
	
	<body align ="center">
		<h1>Add an Event</h1>
		<form name="myform" method="post" onsubmit="return validateform();" align ="center"style="border-style:double;background-color:#DEB887;width:700px;height:550; ">
			<br>
			<br>
			Event Title: <input type="text" name="title" placeholder="ex:Meeting"  required ><br>
			<br>
			Event description: <input type="text" name="des" style=" height: 70px; width: 350px;" maxlength="160" placeholder="maxmium 160 character" ><br>
			<br>
			Event Date: <input type="Date" name="date" required><br>
			<br>
			Start Time: <input type="time" name="stime" required>
			End Time: <input type="time" name="etime" required ><br>
			<p>Do you Want to Reserve a room :</p> 
			<input type="radio" name="reserve" id="room" value="R"> yes
			<input type="radio" name="reserve" id="noroom" value="NR"> No<br>
			<p class="num " >Please Enter the number of particpants</p>
			 <input type="number" class="N" name="rc" placeholder="0">
			<br>
			<br>
			<input type="submit" id="sub" value="Add Event"  >
			<br>
			<br>
		</form>
	</body> 
</html>

<?php
	include_once "EventClass.php";
	if(isset($_POST['submit']))
	{
		$title=$_POST['title'];
		$description=$_POST['des'];
		$date=$_POST['date'];
		$startTime=$_POST['stime'];
		$endTime=$_POST['etime'];
		$numOfParticipants=$_POST['rc'];
		$x=Event::addEvent($title,$description,$numOfParticipants,$date,$stime,$etime);
	}
?>