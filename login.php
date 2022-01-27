<?php

session_start();

?>



<?php
session_start();


$connect = mysqli_connect("localhost", "root", "", "project") or die("Couldn't connect " . mysqli_error($connect) );

if (isset($_POST["submit"])) {
  # code...
  $username = $_POST["username"];
  $pass = $_POST["password"];

  $query = "SELECT * FROM admin_tb WHERE Name='$username' AND Pass_word='$pass'";
  $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

  if (mysqli_num_rows($result) == 1) {
    # code...
    $found_user  = mysqli_fetch_array($result);
    $_SESSION["user_id"] = $found_user["id"];
    $_SESSION["user_name"] = $found_user["Name"];

    header("location:student_info.php");
  }else{?>


    <script>
    alert("Incorrect username or password");
    </script>

   <?php   
  }
  
}

?>


<?php
/*
  $name = mysqli_real_escape_string($connect, trim($_POST["username"]));
  $pass = mysqli_real_escape_string($connect, trim($_POST["password"]));*/
?>



<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="dist/css/Home.css" rel="stylesheet">
    <link href="dist/css/animate.min.css" rel="stylesheet">

	<title>Admin Login</title>
</head>
<body>
	<!--  NAVIGATION  -->

  	<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  			</div>
  			<div class="navbar-collapse collapse">
  				<ul class="nav navbar-nav navbar-right">
  					<li><a href="Home.php">Home</a></li>
  					<li><a href="About.php">About</a></li>
  					<li><a href="Admissions.php">Admissions</a></li>
  					
  					<li><a href="Students.php">Students</a></li>
  					<li><a href="Gallery.php">Gallery</a></li>
  					<li><a href="News.php">News & Events</a></li>
  					<li><a href="Contacts.php">Contacts</a></li>
            <li><a href="register.php">Register</a></li>
            <li class="active"><a href="login.php">&#10084;Admin Login</a></li>
  				</ul>			
  			</div>
  		</div>
  	</div>

  	<!--  END OF NAVIGATION  -->


  	<!--  CAROUSEL  -->

  	<div class="container-fluid">
  		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  		  <ol class="carousel-indicators"> 
  			 <li data-target="#myCarousel" data-slide-to="0"></li>
  			 <li data-target="#myCarousel" data-slide-to="1"></li>
  			 <li data-target="#myCarousel" data-slide-to="2"></li>
  			 <li data-target="#myCarousel" data-slide-to="3"></li>
  		  </ol>
  		  <div class="carousel-inner">
  			 <div class="item active">
  				<img src="IMG/0.jpg"  style="width: 100%;height: 400px">
  			 </div>
  			 <div class="item">
  				<img src="IMG/1.jpg"  style="width: 100%;height: 400px">
  			 </div>
  			 <div class="item">
  				<img src="IMG/2.jpg"  style="width: 100%;height: 400px">
  			  </div>
  			  <div class="item">
  				<img src="IMG/3.jpg"  style="width: 100%;height: 400px">
  			  </div>
  		  </div>  		  
  	  </div>
  	</div>

    <!--  FORM  -->

    <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-4"></div>
          <div class="col-lg-4 col-md-4">
            <form style="margin-bottom: 5%;" role="form" method="post" action="">
              <fieldset style="border: ">
                   <legend>Sign In</legend>
                   <div class="form-group">
                       <label for="name">User name</label>
                       <input type="text" class="form-control" placeholder="User name" name="username">
                   </div>
                    <div class="form-group">
                       <label for="password">Password</label>
                       <input type="password" class="form-control" placeholder="Password" name="password">
                   </div>
              </fieldset>
              
              <input type="submit" name="submit" value="Sign In" class="btn btn-success">
            </form>
          </div>
          <div class="col-lg-4 col-md-4"></div>
      </div>
    </div>


  	 <!--  FOOTER  -->

    <div id="Footer" class="Footer">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-6" >
               <h4>Contact Me</h4>
               <p><i class="fa fa-home" aria-hidden="true"></i>Mile 18, Buea</p>
               <p><i class="fa fa-envelope" aria-hidden="true"></i>info@thatsoftwareguy.com</p>
               <p><i class="fa fa-phone" aria-hidden="true"></i>+237678689679</p>
               <p><i class="fa fa-globe" aria-hidden="true"></i>www.thatsoftwareguy.com</p>
             </div>
             <div class="col-lg-6 col-md-6" >
               <h4>Stay in touch</h4>
               <i class="social fa fa-facebook" aria-hidden="true"></i>
               <i class="social fa fa-twitter" aria-hidden="true"></i>
               <i class="social fa fa-linkedin" aria-hidden></i>
               <i class="social fa fa-pinterest" aria-hidden="true"></i>
               <i class="social fa fa-youtube" aria-hidden="true"></i>
               <i class="social fa fa-github" aria-hiiden="true"></i>
             </div>
          </div>
       </div>
    </div>
   

     
     <script src="dist/js/jquery.min.js"></script>
     <script src="dist/js/wow.min.js"></script>
     <script src="dist/js/bootstrap.min.js"></script>
     <script type="text/javascript"></script>

</body>
</html>