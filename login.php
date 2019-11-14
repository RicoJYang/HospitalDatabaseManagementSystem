<!DOCTYPE html>
<html>
<head>
	<title>Login-Confirmation</title>
</head>
<body>
	<?php
		$con = mysqli_connect('localhost','root','aditya2000','hospital');
		if (!$con) 
		{
    		die('Could not connect: ' . mysqli_error($con));
		}
		if(empty(trim($_POST["Username"])))
		{
			$username_err="Please enter username";
			echo $username_err;
      echo "<br><a href='login.html'>Back to Login</a><br>";
		}
		else
		{
			$username=trim($_POST["Username"]);
		}
		if(empty(trim($_POST["Password"])))
		{
       		$password_err="Please enter your password";
       		echo $password_err;
          echo "<br><a href='login.html'>Back to Login</a><br>";
    	} 
    	else
    	{
       		$password=trim($_POST["Password"]);
   		}
   		if(empty($username_err)&& empty($password_err))
   		{
   			$sql="SELECT username, password FROM login WHERE username=?";
   			if($stmt=mysqli_prepare($con,$sql))
   			{
   				mysqli_stmt_bind_param($stmt,"s",$param_username);
   				$param_username=$username;
   				if(mysqli_stmt_execute($stmt))
   				{
   					mysqli_stmt_store_result($stmt);
   					//Check if username exists, if yes then verify password
   					if(mysqli_stmt_num_rows($stmt)==1)
   					{
   						mysqli_stmt_bind_result($stmt,$username,$hashed_password);
   						if(mysqli_stmt_fetch($stmt))
   						{
   							//IMP: Used logical verification instead of password_verify
   							if($password==$hashed_password)
   							{
   								//Password is correct, redirect to home page
                  echo "Login verified";
   								header("Location: home.php");	
   							}
   							else
   							{
   								//If password is not valid
   								$password_err="Invalid password";
   								echo $password_err;
                  echo "<br><a href='login.html'>Back to Login</a><br>";
   							}

   						}
   					}
   					else
   					{
   						//If username is not valid
   						$username_err="No account with given username found";
   						echo $username_err;
              echo "<br><a href='login.html'>Back to Login</a><br>";
   					}
   				}
   				else
   				{
   					echo "Something went wrong on our end. Please try again later.";
            echo "<br><a href='login.html'>Back to Login</a><br>";
   				}
   			}

   		}

		?>
</body>
</html>