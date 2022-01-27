<?php
session_start();
?>

<?php

if (!isset($_SESSION["user_id"])) {
  # code...
?>

<script type="text/javascript">
  window.location = "login.php";
</script>

<?php
}

?>






<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="dist/css/Students.css" rel="stylesheet">
    <link href="dist/css/animate.min.css" rel="stylesheet">
</head>
<body>
	<!--  NAVIGATION  -->

<!---
  	<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
  		<div class="container-fluid">
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
              <li><a href="login.php">Admin Login</a></li>
  				</ul>			
  			</div>
  		</div>
  	</div>      --->

                           <!---    START OF TGABLE    --->

     <div class="container">
       <div style="color: red; margin-right: auto !important; margin-left: auto !important; text-align: center !important; font-size: 20px; width: 50%; height: 50px; background: gray; line-height: 220%;">
        <marquee> Successfully Logged In As <?php echo $_SESSION["user_name"]; ?> </marquee>
       </div> 
       <div>
         <!---    METHOD I    --->
         <button  class="btn btn-default" style=""><a href="logout.php">Logout</a></button>

        <!---    METHOD II    --->

        <!---   <?php  #require_once("logout.php");   ?>  -->

       </div>
     </div>
  	 <div class="container" style="margin-top:1%;">
      <table class="table table-striped">
        <caption style="text-align: center;"><h3>Students information view</h3></caption>
        <thead>
          <tr>
            <th>No</th>
            <th>Student name</th>
            <th>Student sex</th>
            <th>Student birth place</th>
            <th>Student birth date</th>
            <th>Student region</th>
            <th>Student division</th>
            <th>Student subdivision</th>
            <th>Student city</th>
            <th>Student area</th>
            <th>Student email</th>
            <th>Student tell code</th>
            <th>Student tell</th>
          </tr>
        </thead>
<?php  
$connect = mysqli_connect("localhost", "root", "", "project") or die("Unable to connect to database " . mysqli_error($connect));


$query = "SELECT * FROM register_tb";

$result = mysqli_query($connect, $query) or die("Query error");
$i = 1;

while ($row = mysqli_fetch_array($result)) {
	# code...

?>




        <tbody>
        	<tr>
        		<td><?php echo $i++; ?></td>
        		<td> <?php echo $row["Student_name"] ?> </td>
        		<td> <?php echo $row["Sex"] ?> </td>
        		<td> <?php echo $row["Student_birth_place"] ?> </td>
        		<td> <?php echo $row["Student_birth_date"] ?> </td>
        		<td> <?php echo $row["Student_region"] ?> </td>
        		<td> <?php echo $row["Student_division"] ?> </td>
        		<td> <?php echo $row["Student_subdivision"] ?> </td>
        		<td> <?php echo $row["Student_city"] ?> </td>
        		<td> <?php echo $row["Student_area"] ?> </td>
        		<td> <?php echo $row["Student_email"] ?> </td>
        		<td> <?php echo $row["Student_tell_code"] ?> </td>
        		<td> <?php echo $row["Student_tell"] ?> </td>
        	</tr>
        </tbody>
<?php
}
?>

      </table>
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





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>