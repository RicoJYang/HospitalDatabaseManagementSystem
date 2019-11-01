<!DOCTYPE html>
<html>
<head>
	<title>Patient view portal</title>
	<style type="text/css">
		#pat
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Patient Admission Records</h1>
	<?php
		$con=mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		$query="SELECT * FROM patient";
		$result=mysqli_query($con, $query);
		echo "<table id='pat' border='1'>";
		echo "<th>PATIENT ID</th><th>NAME</th><th>ADDRESS</th><th>DOB</th><th>CONTACT</th><th>SEX</th><th>BLOOD GROUP</th><th>ROOM NUMBER</th>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['patient_id']."</td><td>".$row['patient_name']."</td><td>".$row['address']."</td><td>".$row['patient_dob']."</td><td>".$row['contact']."</td><td>".$row['gender']."</td><td>".$row['blood_group']."</td><td>".$row['roomassigned']."</td></tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	<br>
	<button onclick="location.href='view.html';">Back</button>
	<br>
	<br>
	<button onclick="location.href='home.html';">Back to Home Page</button>
</body>
</html>