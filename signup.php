
<?php
	require_once("connection.php");
 	
	if(isset($_POST['user_registration']))
	{
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		
		if( !empty($user_name)  and !empty($user_password)  and !empty($user_email))
		{
			$sql = "Select * from user_info where user_name = '$user_name'";
			if($res  = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($res) == 0)
				{
					// Insert
					$ins = "INSERT INTO user_info( `user_name`, `user_password`,  `user_email`) VALUES ('$user_name','$user_password', '$user_email')";
					mysqli_query($conn,$ins); 
					header("Location:index.php");
					
					echo "<script>	alert('Your Registration is successfull!...............');		</script>";	
					
				}
				else
					echo "<script>	alert('This data already used, Please try another...............');		</script>";	
					
						
			
			}			
		}	
	}


?>


<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <link rel="stylesheet" href="style3.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<link
      href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,800,900&display=swap"
      rel="stylesheet"
    />
    <script src="script.js"></script>
  </head>
  <body onLoad="realTimeClock()">
	  
	  <nav>
            <!-- logo -->
        
            <a href="index.php" class="logo">MD.Sabbih Sarker</a>
        
            <!-- menu -->
            <!-- real clock -->
            <div id="clock">
                
            </div>
            <ul>
                <li><a href="home.php"></a></li>
                <li><a href="about.php"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>

            </ul>
        </nav>
	  
	  <br><br> <br><br> <br><br> 
	  
	  
    <div class="center">
      <h1>Registration</h1>
      <form method="post">  
        <div class="txt_field">
          <input type="text" name="user_name" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="user_password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="email" name="user_email" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="pass"></div>
        <input type="submit" name="user_registration" value="Signup">
        <div class="signup_link">
         A member? <a href="login.php">Login</a>
        </div>
      </form>
    </div>

	   <br><br> 
	  
	 <footer>
    <!--heading-->
 <p>Connect-To-Internet</p>
    <!--paragraph-->
    <p>If You really like my work,if you don&#8217;t i change this until you like I give you seticfaction result!!</p>
    <!--social-->
   <div class="social-icons">
    <a href="https://www.facebook.com/groups/webdeveloperbd" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
   </div>
    <!--copyright-->
	<p class="copyright">Copyright &copy; By SKR</p>
</footer>
	  
  </body>
</html>
