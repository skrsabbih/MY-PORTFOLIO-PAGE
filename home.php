<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!--css style link--->
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="style2.css">
    <!--font awesome link--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" 
     referrerpolicy="no-referrer" />
	<!--google font link--->
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
        <!-- navigation logo and menu end -->

        <!-- text start -->

        <div class="text-container">
            <p>Hello,</p>
            <p>I'M Sabbih</p>
            <p>I am Web Developer <br>& Designer</p>
            <button class="hire-btn">Hire Me</button>
            <a href="about.php"><button class="down-cv">Watch CV</button></a>
        </div>

        <!-- my image start -->
        
        <img src="images/skr.jpg" class="image" alt="image">
        <!-- my image end -->
        <!-- text end -->
    </section>

    <!--  about section start -->
    <br><br><br>
    <div class="about-container">
        <img src="images/skr.jpg" alt="image">
	<!--about-me-text-->
		<div class="about-text">
		<p>About Me</p>
		<p>Devolper & Designer</p>
		<p>Hello,My name is Sabbih Sarker. 
            I am a Devolper and also a Designer.
            If you have asany Project or if you want make a software for your bisnes conatact me.
            I make as soon as possibale.
            You really like my work,if you don&#8217;t i change this until
             you like I give you seticfaction result.</p>
		<p>I am a Devolper and also a Designer.If you have asany Project or 
            if you want make a software for your bussniess conatact me.
            I make your project as soon as possible.</p>
		<a href="login.php"><button>SignIN</button></a>
		<a href="signup.php"><button>SignUp</button></a>
		</div>
    </div>
      <!--  about section end -->
      

       <!--Skill-container start------->
	<div class="services ">
		<!--text-->
		<div class="services-text ">
	<p>Skills</p>
	<p>Qualites Requaid</p>
	<p>if you want make a software for your bussniess conatact me.I make as soon as possibale.
        You really like my work, if you don&#8217;t 
        i change this until you like if you want make a software for your bussniess conatact me.
        I make as soon</p>
			</div>
		<div class="box-container">
           
		<!--1------------->
			<div class="box-1">
            <input type="checkbox" id="check">
			<span>1</span>
			<p class="heading">HTML & CSS</p>
			<p class="details">If you want make a software for your bussniess conatact me.
                I make as soon as possibale.You really like my work, 
                if you don&#8217;t i change this until you like if you want................
            </p>
            <div class="content">
                <p class="details">if you want make a software for your bussniess conatact me.
                </p> 
            </div>
			<label for="check">Read More</label>
			</div>
	   <!--2------------->
			<div class="box-2">
                <input type="checkbox" id="check2">
                <span>2</span>
                <p class="heading">BASIC JAVASCRIPT</p>
                <p class="details">If you want make a software for your bussniess conatact me.
                    I make as soon as possibale.You really like my work, 
                    if you don&#8217;t i change this until you like if you want................
                </p>
                <div class="content">
                    <p class="details">if you want make a software for your bussniess conatact me.
                    </p> 
                </div>
                <label for="check2">Read More</label>
			</div>
		<!--3------------->
			<div class="box-3">
                <input type="checkbox" id="check3">
                <span>3</span>
                <p class="heading">BASIC PHP</p>
                <p class="details">If you want make a software for your bussniess conatact me.
                    I make as soon as possibale.You really like my work, 
                    if you don&#8217;t i change this until you like if you want................
                </p>
                <div class="content">
                    <p class="details">if you want make a software for your bussniess conatact me.
                    </p> 
                </div>
                <label for="check3">Read More</label>
			</div>
		</div>
	</div>
<!--Skill-container end------->



<!-- contact me section start-->
<div class="contact-me">
    <p>If You Have Any Project In Your Mind ?</p>
    <a href="contact.php"><button>Contact me</button></a>
</div>
<!-- contact me section end-->


<!-- footer section start -->

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
   <!--social-attach-bar-->
   <div class="social">
   <a href="https://www.facebook.com/groups/webdeveloperbd" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
   <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
   <a href="https://www.youtube.com" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
   </div>
<!-- footer section end -->


</body>
</html>