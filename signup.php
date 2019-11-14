<!-- ALTER USER 'mysqlUsername'@'localhost' IDENTIFIED WITH mysql_native_password BY 'mysqlUsernamePassword'; -->
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up - Confirmation</title>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		$user_info="INSERT INTO login VALUES('$_POST[username]','$_POST[password]','$_POST[type]')";
		if(!mysqli_query($con,$user_info))
		{
			die('Could not upload data: ' . mysqli_error($con));
		}
		echo "Information successfully added to database";
		mysqli_close($con);
	?>
	<br>
	<button onclick="location.href='login.html';">Go to login page</button>
</body>
</html>