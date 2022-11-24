<?php
	require_once("connection.php");
 	
	if(isset($_POST['send']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		if( !empty($name)  and !empty($email)  and !empty($message))
		{
			$sql = "Select * from user_msg where name = '$name'";
			if($res  = mysqli_query($conn,$sql))
			{
				if(mysqli_num_rows($res) == 0)
				{
					// Insert
					$ins = "INSERT INTO user_msg( `name`, `email`,  `message`) VALUES ('$name','$email', '$message')";
					mysqli_query($conn,$ins); 
					header("Location:contact.php");
								
					
				}						
								
			}			
		}	
	}


?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
      .second{
        padding:40px 0;
      }
    </style>
    <script src="./script.js"></script>
    <meta charset="utf-8">
    <title>Contact</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" 
     referrerpolicy="no-referrer" />
     
   <!---google font --->
     <link
      href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,800,900&display=swap"
      rel="stylesheet"
    />
  <!---style css link  -->
     <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body onload="realTimeClock()">
  <nav>
            <!-- logo -->
        
            <a href="home.php" class="logo">MD.Sabbih Sarker</a>
        
            <!-- menu -->
            <!-- real clock -->
            <div id="clock">
                
            </div>
           
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="skill.php">Skills</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li> <a href="index.php"style="color:blue;">Logout <i class="fa fa-user-circle-o"></i></a></li>
            </ul>
        </nav>
        <br><br><br>
    <form action="" method="post">
      <div class="title">
        <h2>CONTACT</h2>
      </div>
      <div class="half">
        <div class="item">
          
          <input type="text" name="name" id = "" placeholder="Enter Your Name" required>
        </div>
        <div class="item">
          
          <input type="email" name="email" id = "" placeholder="Enter Your Email" required>
        </div>
      </div>
      <div class="full">
        
       <textarea type="text" name="message" id = "" placeholder="Enter Your Message" required></textarea>
      </div>
      <div class="action">
        <input type="submit" name ="send" value = "SEND MESSAGE" >
      </div>
      
    </form>
      <br>
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
	<p >Copyright &copy; By SKR</p>
</footer>

  </body>
</html>