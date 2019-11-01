<!DOCTYPE html>
<html>
<head>
	<title>Room</title>
</head>
<body>
	 <form action="room.php" method="post">
            <p>Name:<input type="text" name="name" id="name">
            <input type="submit" value="Submit"></p>
        </form>
        <br>
        <div id="txtHint">Enter patient name to view records</div>
	<?php
	$con = mysqli_connect('localhost','root','aditya2000','hospital');
	if (!$con) 
	{
	    die('Could not connect: ' . mysqli_error($con));
	}
	mysqli_select_db($con,"hospital");
	$user_info="INSERT INTO room VALUES('$_POST[room_no]','$_POST[room_type]','Vacant')";
	?>
	</body>
</html>