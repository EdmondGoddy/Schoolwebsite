<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap 101 Framework/Gallery</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <link href="dist/css/Gallery.css" rel="stylesheet">
    <link href="dist/css/animate.min.css" rel="stylesheet">
</head>
<body>
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
  					<li class="active"><a href="Gallery.php">Gallery</a></li>
  					<li><a href="News.php">News & Events</a></li>
  					<li><a href="Contacts.php">Contacts</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Admin Login</a></li>
  				</ul>			
  			</div>
  		</div>
  	</div>

  	<!--  END OF NAVIGATION  -->


  	<!--  START OF OUR NEW CAMPUS  -->


  	<div id="Gallery" class="Gallery">
  		<div class="container">
  			<h1>These are the pictures of our new campus</h1>
  			<div class="row">
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/1.jpg"><img src="IMG/img/1.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/2.jpg"><img src="IMG/img/2.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/3.jpg"><img src="IMG/img/3.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/4.jpg"><img src="IMG/img/4.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/5.jpg"><img src="IMG/img/5.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/6.jpg"><img src="IMG/img/6.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/7.jpg"><img src="IMG/img/7.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  				<div class="col-lg-3 col-md-3">
  					 <div class="thumbnail">
  					 	 <a class="fancybox" rel="group" href="IMG/img/8.jpg"><img src="IMG/img/8.jpg"></a>
  					 </div>
  					 <p class="caption">Thumbnail</p>
  				</div>
  			</div>
  		</div>
  	</div>
















     
      <!-- Add jQuery library -->
<script src="dist/js/jquery.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="source/jquery.fancybox.css?v=2.1.7" type="text/css" media="screen" />
<script type="text/javascript" src="source/jquery.fancybox.pack.js?v=2.1.7"></script>

<script src="dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

</body>
</html>