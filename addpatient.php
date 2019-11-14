<!DOCTYPE html>
<html>
<head>
	<title>Patient Admission form</title>
</head>
<body>
	
	<?php
		$con=mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		$patient_info="INSERT INTO patient VALUES('$_POST[patient_id]','$_POST[patient_name]','$_POST[address]','$_POST[patient_dob]','$_POST[contact]','$_POST[gender]','$_POST[blood_group]','$_POST[roomassigned]')";
		if(!mysqli_query($con,$patient_info))
		{
			die('Could not upload data: ' . mysqli_error($con));
		}
		if(empty(trim($_POST["name"])))
		{
			$name_err="Please enter patient name";
			echo $name_err;
      	}
      	
	?>
</body>
</html>