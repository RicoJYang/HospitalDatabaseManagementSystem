<!DOCTYPE html>
<html>
<head>
	<title>Employee records portal</title>
	<style type="text/css">
		#emp
		{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Employee Records</h1>
	<?php
		$con=mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		$query="SELECT * FROM employee";
		$result=mysqli_query($con, $query);
		echo "<table id='emp' border='1'>";
		echo "<th>EMPLOYEE ID</th><th>NAME</th><th>ADDRESS</th><th>DOB</th><th>CONTACT</th><th>SEX</th><th>SALARY</th><th>DESIGNATION</th><th>DEPARTMENT NUMBER</th>";
		while($row=mysqli_fetch_array($result))
		{
			echo "<tr><td>".$row['employee_id']."</td><td>".$row['employee_name']."</td><td>".$row['address']."</td><td>".$row['employee_dob']."</td><td>".$row['employee_contact']."</td><td>".$row['gender']."</td><td>".$row['salary']."</td><td>".$row['designation']."</td><td>".$row['dep_no']."</td></tr>";
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