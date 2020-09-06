<?php
	Class Event
	{
		public $id;
		public $title;
		public $description;
		public $Room;
		public $numOfParticipants;
		public $startTime;
		public $endTime;
		public $date;

		function __construct($id)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="select * from event where id=".$id;
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->id=$row[0];
				$this->title=$row[1];
				$this->description=$row[2];
				$this->numOfParticipants=$row[3];
				$this->room=new room($row[4]);
				$this->day=$row[5];
				$this->month=$row[6];
				$this->startTime=$row[7];
				$this->endTime=$row[8];
			}
		}
		
		function reserve($numOfParticipants)
		{
			
		}
	}

	Class Room
	{
		public $number;
		public $capacity;
		public $reserved;

		function __construct($number)
		{
			$con=mysqli_connect("localhost","root","","Calendar");
			$sql="select * from room where id=".$number;
			$result=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($result))
			{
				$this->ID=$row[0];
				$this->Name=$row[1];
			}
		}
	}
?>
