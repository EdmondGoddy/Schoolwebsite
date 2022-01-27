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
	<title>HIBMAT REGISTRATION FORM</title>
</head>
<body style="background: lightgray;">


		<!--  NAVIGATION  -->

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
                    <li class="active"><a href="register.php">Register</a></li>
                    <li><a href="login.php">Admin Login</a></li>

  				</ul>			
  			</div>
  		</div>
  	</div>

  	<!--  END OF NAVIGATION  -->

                             <!--     ---------           --------------   ---

                                        STUDENT'S REGISTRATION FORM  

                             -------------           START                   --->

	<div class="container" style="margin-top: 5%;">
		<table border="4" align="center" width="900" style="background: white">
			<tr>
				<td>
					<h1 style=""><center><marquee><big><b>HIBMAT ONLINE REGISTRATION FORM</b></big></marquee></center></h1><br>
				</td>
			</tr>
		</table>
		<h2 align="center"><big>PERSONAL INFORMATION</big></h2>
		<hr>
		<form role="form" method="post">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Full Names :</label>
						<input type="text"  name="s_name" required=""></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Select sex</label>
						<select name="sex">
							<option value="male">----------</option>
							<option value="male">Male</option>
                            <option value="female">Female</option>
					   </select>	
				    </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Place of birth :</label>
						<input type="text"  name="s_birth" required=""></input>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Date of birth :</label>
						<input type="date"  name="d_birth" required=""></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Region:</label>
						<input type="text"  name="region" required=""></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name"> Division:</label>
						<input type="text"  name="division" required=""></input>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Subdivision:</label>
						<input type="text"  name="subdivision" required=""></input>
					</div>
				</div>
				<div class="col-lg43 col-md-4">
					<div class="form-group">
						<label for="name">Select city</label>
						<select name="city">
							<option>----------</option>
                             <option value="buea">BUEA </option>
                             <option value="douala">DOUALA </option>
                             <option value="limbe">LIMBE  </option>
                             <option value="tiko">TIKO </option>
                             <option value="kumba">KUMBA</option>
                             <option value="mamfe">MAMFE</option>
                             <option value="bamenda">BAMENDA</option>
                             <option value="garouwa">GAROUWA</option>
                             <option value="fombot">FOMBOT</option>
                             <option value="bafut">BAFUT</option>
                             <option value="nigeria">NIGERIA</option>
                             <option value="yaounde">YAOUNDE</option>
                             <option value="souza">SOUZA</option>
                             <option value="muyuka">MUYUKA</option>
					   </select>	
				    </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Area</label>
						<input type="text" name="area" required="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" required="">
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Select code</label>
						<select name="c_code">
							<option>----------</option>
                            <option data-countrycode="CMR" value="237">CAMEROON (+237)</option>
                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                            <option data-countrycode="NE" value="227">Niger (+227)</option>
                            <option data-countrycode="UK" value="1">Uk (+44) </option>
					   </select>	
				    </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<label for="tell">Tell</label>
					<input type="number" name="tell" required="">
				</div>
			</div>
	                                  <!--     ---------           --------------   ---

                                        STUDENT'S REGISTRATION FORM  

                             -------------           END                   --->

     

                              <!--     ---------           --------------   ---

                                        FATHER'S REGISTRATION FORM  

                             -------------           START                   --->
     
    	    <hr> 
			  <div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Father's name :</label>
						<input type="text"  name="f_name"></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Select code</label>
						<select name="f_code">
							<option>----------</option>
                            <option data-countrycode="CMR" value="237">CAMEROON (+237)</option>
                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                            <option data-countrycode="NE" value="227">Niger (+227)</option>
                            <option data-countrycode="UK" value="1">Uk (+44) </option>
					   </select>	
				    </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="tell">Tell</label>
					<input type="number" name="f_tell">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Place of birth :</label>
						<input type="text"  name="f_birth"></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Occupation :</label>
						<input type="text"  name="f_occupation"></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Mother's name:</label>
						<input type="text"  name="m_name"></input>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Select code</label>
						<select name="m_code">
							<option>----------</option>
                            <option data-countrycode="CMR" value="237">CAMEROON (+237)</option>
                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                            <option data-countrycode="NE" value="227">Niger (+227)</option>
                            <option data-countrycode="UK" value="1">Uk (+44) </option>
					   </select>	
				    </div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="tell">Tell</label>
					<input type="number" name="m_tell">
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Place of birth</label>
						<input type="text" name="m_birth">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Occupation:</label>
						<input type="text" name="m_occupation">
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Guardian's name :</label>
						<input type="text"  name="g_name"></input>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Select code</label>
						<select name="g_code">
							<option>----------</option>
                            <option data-countrycode="CMR" value="237">CAMEROON (+237)</option>
                            <option data-countrycode="NG" value="234">Nigeria (+234)</option>
                            <option data-countrycode="NE" value="227">Niger (+227)</option>
                            <option data-countrycode="UK" value="1">Uk (+44) </option>
					   </select>	
				    </div>
				</div>
			</div>	
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="tell">Tell</label>
					    <input type="number" name="g_tell" >
					</div>
				</div>
			    <div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Place of birth</label>
						<input type="text" name="g_birth" >
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						<label for="name">Occupation :</label>
						<input type="text"  name="g_occupation"></input>
					</div>
				</div>
			</div>         

			<div class="row">
				<div class="col-lg-4 col-md-4">
				</div>	
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
					    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
				    </div>
				</div>	
				<div class="col-lg-4 col-md-4">
				</div>	
			</div>
		</form>	
	</div>  

		<!--  START OF FOOTER  -->

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
    <script src="dist/js/bootstrap.min.js"></script>



<?php
$connect = mysqli_connect("localhost", "root", "", "project") or die("Unable to connect to database " . mysqli_error($connect));

if (isset($_POST["submit"])) {
	# code...


	#################                      #####################

	     #### DECLAIRING VARIABLES FOR STUDENTS INPUTS #####

	################                       #####################

	@$student_name = $_POST["s_name"];
	@$student_sex = $_POST["sex"];
	@$student_birth_place = $_POST["s_birth"];
	@$student_birth_date = $_POST["d_birth"];
	@$student_region = $_POST["region"];
	@$student_division = $_POST["division"];
	@$student_subdivision = $_POST["subdivision"];
	@$student_city = $_POST["city"];
	@$student_area = $_POST["area"];
	@$student_email = $_POST["email"];
	@$student_tell_code = $_POST["c_code"];
	@$student_tell = $_POST["tell"];


	###############################                    ###############################

	     #### DECLAIRING VARIABLES FOR FATHER, MOTHER AND GARDIAN INPUTS #####

	###############################                    ###############################

/*	$father_name = $_POST["f_name"];
	$father_code = $_POST["f_code"];
	$father_tell = $_POST["f_tell"];
	$father_birth_place = $_POST["f_birth"];
	$father_occupation = $_POST["f_occupation"];

	$mother_name = $_POST["m_name"];
	$mother_code = $_POST["m_code"];
	$mother_tell = $_POST["m_tell"];
	$mother_birth_place = $_POST["m_birth"];
	$mother_occupation = $_POST["m_occupation"];

	$gardian_name = $_POST["g_name"];
	$gardian_code = $_POST["g_code"];
	$gardian_tell = $_POST["g_tell"];
	$gardian_birth_place = $_POST["g_birth"];
	$gardian_occupation = $_POST["g_occupation"];

*/

if (empty($student_name) || empty($student_sex) || empty($student_birth_place) || empty($student_birth_date) || empty($student_region) 
	|| empty($student_division) || empty($student_subdivision) || empty($student_city) || empty($student_area) || empty($student_email) 
	|| empty($student_tell_code) || empty($student_tell) ) {

	# code...
	echo "<script>  </script>";

}else{

	$query = "INSERT INTO register_tb (Student_name, Sex, Student_birth_place, Student_birth_date, Student_region, Student_division, Student_subdivision, Student_city, Student_area, Student_email, Student_tell_code, Student_tell) VALUES ('$student_name', '$student_sex', '$student_birth_place', '$student_birth_date', '$student_region', '$student_division', '$student_subdivision', '$student_city', '$student_area', '$student_email', '$student_tell_code', '$student_tell')";

	mysqli_query($connect, $query) or die("EEEEEEEEEEEEError " . mysqli_error($connect));

	echo "<script> alert('Information successfull inserted') </script>";
}

}

?>


</body>
</html>


                