<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" 
     referrerpolicy="no-referrer" />
	
	<link
      href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,700,800,900&display=swap"
      rel="stylesheet"
    />
    <script src="script.js"></script>
    
</head>
<body onload="realTimeClock()">
    <section>
        <!-- navigation logo and menu start -->
        <nav>
            <!-- logo -->
        
            <a href="index.php" class="logo">MD.Sabbih Sarker</a>
        
            <!-- menu -->
            <!-- real clock -->
            <div id="clock">
                
            </div>
            <ul>
                <li><a href="login.php" style="color:red;">Sign In <i class="fa fa-user-circle-o"></i></a>
                </li>
            </ul>
            
           
             
        </nav>
        <!-- navigation logo and menu end -->

        <!-- text start -->

        <div class="text-container">
            <p>Hello,</p>
            <p>I'M Sabbih</p>
            <p style="color:red; padding:10px 0; font-size:25px"><marquee>PLEASE LOGIN & VISIT MY WEBSITE</marquee></p>
            <a href="login.php"><button class="down-cv">Sign In</button></a>
            <a href="signup.php"><button class="down-cv">Sign Up</button></a>
        </div>

        <!-- my image start -->
        
        <img src="images/skr.jpg" class="image" alt="image">
        <!-- my image end -->
        <!-- text end -->
    </section>


</body>
</html>