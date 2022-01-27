<!DOCTYPE html> 
<html lang="en">    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="dist/css/Home.css" rel="stylesheet">
    <link href="dist/css/animate.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Framework</title>
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
  					<li class="active"><a href="Home.php">Home</a></li>
  					<li><a href="About.php">About</a></li>
  					<li><a href="Admissions.php">Admissions</a></li>
  					
  					<li><a href="Students.php">Students</a></li>
  					<li><a href="Gallery.php">Gallery</a></li>
  					<li><a href="News.php">News & Events</a></li>
  					<li><a href="Contacts.php">Contacts</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Admin Login</a></li>
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
  	

  	<!--  HEADER  -->

  	<div id="header" class="header">
  		<div class="container">
  			<div class="row"> 
  				<div class="col-lg-6 col-md-6 wow bounceInLeft">
  					<img src="IMG/Hydrangeas.jpg">
  				</div>
  				<div class="col-lg-6 col-md-6 wow bounceInRight">
  					<h1>Welcome Message from the President</h1>
  					<p>I would like to take this opportunity to congratulate you on choosing the Higher Institue of Business Management and Technology, HIBMAT, Buea, as the place to enhance or acquire new skills.</p>
  					<p>The school has considerable experience in running academic, vocational and professional courses to the highest standards. In order to achieve these high standards, class sizes are deliberately kept at minimum, so that students benefit from the close attention given to them by our highly qualified staff. The high staff to student ratio means that courses are oriented towards passing national and international examinations. Economically, this has the advantage that one takes less time to progress to a higher level in one’s career path.</p>
  					<p>Our academic and administrative structure is specifically designed to assist you in the attainment of your objectives.</p>
  					<p>For prospective students in Cameroon, my office is always open. You are most welcome to visit the school and meet the staff. We are always willing to attend to your needs.</p>
  					<!--<button class="btn btn-lg btn-primary">Buy now</button>
  					<button class="btn btn-lg btn-success">View Detail</button> -->
  				</div>
  			</div>
  		</div>
  	</div>

  	<!--  END OF HEADER  -->

  	<!--  ABOUT US  -->

  	<div id="aboutUs" class="aboutUs">
  		<div class="container">
  			    <h2 class="wow fadeInUp">About Us</h2>
  			<div class="row">
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.8s" style=" border: 1px solid rgb(0,255,255)">
  					<h3>Administration & Governance</h3> 
                    <p> The founders of HIBMAT constitute those who came together, with a common vision to create a professional Higher Institute of learning...</p>
                    <button class="btn btn-lg btn-primary">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.4s" style=" border: 1px solid rgb(0,255,255)">
  					<h3>Vision & Goals</h3> 
                    <p> HIBMAT wishes to use our existing resources and potentials to modernize the economy of Cameroon, and put it on the right path for...</p>
                    <button class="btn btn-lg btn-primary">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="0.8s" style=" border: 1px solid rgb(0,255,255)">
  					<h3>Our Mission</h3>
  					<p>Our mission is to demystify technology, train managers and technologist locally and produce skills and expertise in technology to...</p>
  					<button class="btn btn-lg btn-primary">Read More</button>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!-- END OF ABOUT US  -->

  	<!-- ADMISSIONS -->

  	<div id="Admissions" class="Admissions">
  		<div class="container">
  			    <h2 class="wow fadeInUp">Admissions</h2>
  			<div class="row">
  				<div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="0.8s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Admissions Policy</h3> 
                    <p>Purchase the admission package for 15,000 frs from: – Secretariat, HIBMAT, Buea – Tel: 677 886 820 – ECOBANK, Buea – CREDIT DU GOLFE, Buea...</p>
                    <button class="btn btn-lg btn-success">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="1.2s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Campus Life</h3> 
                    <p> The first one week in school will be an orientation week. For one week, all freshmen will undergo orientation before they are given their course...</p>
                    <button class="btn btn-lg btn-success">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow flipInY" data-wow-delay="1.6s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Services & Support</h3>
  					<p>Emphasis is laid on Academic Excellence. Students who manifest exceptional academic abilities would benefit from reward schemes to be instituted by...</p>
  					<button class="btn btn-lg btn-success">Read More</button>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!--  END OF ADMISSIONS  -->

  	<!--  OUR PROGRAMS  -->

  	<div id="ourProgram" class="ourProgram">
  		<div class="container">
  			    <h2 class="wow fadeInUp">Our Program</h2>
  			<div class="row">
  				<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="1.6s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Bachelor's Degree(B-Tech)</h3> 
                    <p>The Higher Institute of Business Management and Technology, HIBMAT, Buea is a Professional University Institute of Excellence and Innovation offering Professional University Courses to students at higher levels. In partnership with the University of Bamenda (UBa), Cameroon, and some International Universities, our objective is to give support and enable...
                    </p>
                    <button class="btn btn-lg btn-warning">Read More</button>
  				</div>
  				<div class="col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="1.2s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Higher National Diploma(HND)</h3> 
                    <p> The HND program in Accountancy aims at training Accounting technicians capable of providing assistance to -The Accountant: in the collection and processing of information towards the preparation of final accountants for internal and external purposes. -The Management: With costs and decision making information. -The Management: With audit evidence...</p>
                    <button class="btn btn-lg btn-warning">Read More</button>
  				</div>
  			</div>
  		</div>
  	</div>

  	<!--  END OF OUR PROGRAMS  -->

  	<!--  STUDENTS  -->

  	<div id="Students" class="Students">
  		<div class="container">
  			    <h2 class="wow fadeInUp">Students</h2>
  			<div class="row">
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.6s"  style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Student Administration</h3> 
                    <p>Only outstanding students are eligible for student administration. Administrative function at the Higher Institute comprises the following...</p>
                    <button class="btn btn-lg btn-danger">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="1.2s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Library Use</h3> 
                    <p>The library is available to students for reading purposes only. Students will not be allowed to carry books out of the library, but shall submit them on time to...</p>
                    <button class="btn btn-lg btn-danger">Read More</button>
  				</div>
  				<div class="col-lg-4 col-md-4 wow fadeInLeft" data-wow-delay="0.8s" style="border-right: 1px solid rgb(0,255,255)">
  					<h3>Dressing Code</h3>
  					<p>Students of HIBMAT are an elite class of refined citizens. Students are permitted to dress formally in any conventional attire. Attires must be neat and...</p>
  					<button class="btn btn-lg btn-danger">Read More</button>
  				</div>
  			</div>
  		</div>
  	</div>


  	<!--  END OF STUDENTS  -->

  	<!--  COMMENTS  -->

  	<div id="Comments" class="Comments">
  		<div class="container">
  			<div class="row">
  				<h2 class="wow fadeInUp">User information</h2>
  				<div class="col-lg-6 col-md-6">
  					<div class="input-group input-group-lg wow fadeInUp" data-wow-delay="0.8s">
  						<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
  						<input type="text" class="form-control" aria-describedby="sizing-addon1" name="" placeholder="Full Name">
  					</div>
  					<div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.2s">
  						<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
  						<input type="text" class="form-control" aria-describedby="sizing-addon1" name="" placeholder="Email Address">
  					</div>
  					<div class="input-group input-group-lg wow fadeInUp" data-wow-delay="1.6s">
  						<span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
  						<input type="text" class="form-control" aria-describedby="sizing-addon1" name="" placeholder="Phone Number">
  					</div>
  				</div>
  				<div class="col-lg-6 col-md-6">
  					<div class="input-group wow fadeInUp" data-wow-delay="2s">
  						<textarea name="" id="" cols="89" rows="6" class="form-control" placeholder="Leave a comment Here"></textarea>
  						<button class="btn btn-lg wow fadeInUp" data-wow-delay="2.4s">Submit</button>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

    <!--  END OF COMMENTS  -->


<?php


$dat=date("d/m/y");

$tim=date("H:i:s");

echo "<marquee style='background:rgb(250,150,250);width:60%;height:50;line-height:280%;box-shadow:0 4px 4px 0 rgb(150,200,250); text-transform:uppercase; color:rgb(200,250,250)'>The current date is $dat.and the current time is $tim</marquee>";

?>


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
     <script type="text/javascript">
       new WOW().init();
     </script>
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->
  </body>

</html>