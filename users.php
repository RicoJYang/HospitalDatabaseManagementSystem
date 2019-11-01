
<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
    text-align: center;
}

th {text-align: center;}
</style>
</head>
<body>
    <form action="users.php" method="post">
            <p>Name:<input type="text" name="name">
            <input type="submit" value="Submit"></p>
        </form>
        <br>
        <div id="txtHint">Enter department number to view dep name</div>
<?php
$con = mysqli_connect('localhost','root','aditya2000','hospital');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"hospital");
$value=$_POST['name'];
$sql="INSERT INTO room(room_no) VALUES('$value')";
?>
</body>
</html> 