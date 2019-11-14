<!DOCTYPE html>
<html>
<head>
	<title>Patient-Staff Attendance Information</title>
</head>
<body>
	<?php
		$con=mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		echo "select patient_name,contact,gender, blood_group,roomassigned,doctor_id,nurse_id,admission_date from patient, attended_by where patient.patient_id=attended_by.patient_id;";
	?>

</body>
</html>