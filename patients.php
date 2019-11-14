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
	<form action="patients.php" method="post">
		<input type="text" placeholder="Search by Name..." name="searchbox" id="searchbox" onkeyup="look()">
	</form>
	<br>
	<button onload="checkhist();" onclick="location.href='addpatient.html';" id="admin">Admit Patient</button>
	<br>
	<br>
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
			echo "<tr><td>".$row['patient_id']."</td><td id='pname'>".$row['patient_name']."</td><td>".$row['address']."</td><td>".$row['patient_dob']."</td><td>".$row['contact']."</td><td>".$row['gender']."</td><td>".$row['blood_group']."</td><td>".$row['roomassigned']."</td></tr>";
		}
		echo "</table>";
		mysqli_close($con);
	?>
	<br>
	<button onclick="goback();">Back</button>
	<br>
	<br>
	<button onclick="location.href='home.php';">Back to Home Page</button>
	<script type="text/javascript">
		var look=function()
		{
			var str=document.getElementById('searchbox').value;
			str=str.toLowerCase();
			var table=document.querySelector('#pat');
			var names=table.querySelectorAll('#pname');
			var rows=table.getElementsByTagName('tr');
			var i=0;
			for(i=0;i<rows.length;i++)
			{
				td=rows[i].getElementsByTagName("td")[1];
				if(td)
					{
						txtVal=td.textContent;
						if(txtVal.toLowerCase().indexOf(str)==0)
						{
							rows[i].style.display="";
						}
						else
						{
							rows[i].style.display="none";
						}
					}
			}
			
		}
		var goback=function()
		{
			window.history.back();
		}
		var checkhist=function()
		{
			console.log("Inside checkhist()");
			if(window.history=="localhost/modify.html")
			{
				console.log("Inside if");
				document.getElementById('admin').style.display="";
			}
			else
			{
				document.getElementById('admin').style.display="none";
			}
		}
	</script>
</body>
</html>