<?php
	session_start();
	require_once('config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign Up Page</title>
<link rel="stylesheet" href="cs/css/style.css">

</head>
<body style="background-color:#bdc3c7">
	<div id="main-wrapper">
	<center><h2>Sign Up Form</h2></center>
		<form action="signup.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.jpg" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<label><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" required><br><br/>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required><br><br/>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Enter Password" name="cpassword" required><br><br/>
				<button name="register" class="sign_up_btn" type="submit">Sign Up</button><br><br/>
				<a href="login.php"><button type="button" class="back_btn"><< Back to Login</button></a>
			</div>
		</form>
		
		<?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from users where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into users values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								echo("redirecting...");
		                       header("refresh:2; url=login.php");
		                        
							}
							else
							{
								echo('<br><br> <h1 align="center" style="color:red">INVALID &nbsp USERNAME &nbsp OR &nbsp PASSWORD <br><br> Enter correct details</h1>');
		                    header("refresh:3; url=login.php");
		                    
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
	</div>
</body>
</html>