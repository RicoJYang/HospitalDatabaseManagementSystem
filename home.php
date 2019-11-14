<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css" href="home.php">
		#out
		{
			position: relative;
			margin-left: 45%;
			margin-right: 50%;
		}
	</style>
</head>
	<body>
		<h1>Welcome to the Hospital Management Portal</h1>
		<a href="view.html">Enter View Mode</a>
		<br>
		<br>
		<a class="admin" href="modify.html">Enter Modify Mode</a>
		<br>
		<br>
		<button id="out" onclick="location.href='logout.php';">Logout</button>
	</body>
	<?php

		$con=mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		
	?>
</html>