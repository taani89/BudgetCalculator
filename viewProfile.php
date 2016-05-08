<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("budget", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select * from register where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: index.html'); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie ie7 lte9 lte8 lte7" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="en-US">	<![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="en-US"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="noIE" lang="en-US">
<!--<![endif]-->
	<head>
		<title>Welcome - <?php echo $row['email']; ?></title>

		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
		
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:500,300' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
		
		<!-- css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/style.css" media="screen"/>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.js"></script>
			<script src="assets/js/respond.js"></script>
		<![endif]-->

		<!--[if IE 8]>
	    	<script src="assets/js/selectivizr.js"></script>
	    <![endif]-->
	</head>
	
	<body>
		<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-5 col-sm-4 header-logo">
					<br>
					<a href="index.html"> <h1 class="logo">Budget<span class="logo-head">Plan</span></h1></a>
				</div>

				<div class="col-md-8 col-md-offset-1 col-xs-7">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse navbar-def" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
					        <li>
						<a href="#wrapper"><i class="fa fa-home"></i> Home</a>
					</li>
                    <li>
						<a href="#about"><i class="fa fa-bookmark"></i> About</a>
					</li>
					<li>
						<a href="#services"><i class="fa fa-tasks"></i> Service</a>
					</li>
                    <li>
						<b id="welcome">Welcome : <i><?php echo $row['username']; ?></i></b>
					</li>
					<li>
                    	
						<b id="logout"><a href="logout.php">Log Out</a></b>
                    </li>
					      </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
		</div>
	</header>

		<div id="wrapper">
			
			<div id="header" class="content-block">
				
				</section>
				<section class="center">
					<div class="slogan">
						COLLEGE BUDGET CALCULATOR
					</div>
					<div class="secondary-slogan">
						Track your EXPENSE NOW and START PLANNING
					</div>
				</section>
			</div><!-- header -->
<!-- About us -->
        <div id="about" class="about-us">
            <div class="container about-sec">
                <header class="block-heading cleafix">
						<div class="title-page">
							<p class="main-header">About us</p>
						    <p class="sub-header">Make sure you know about us<br/>
                                                  Achieve more everyday in your work and your daily life</p>
                           
						</div>
			  </header>
                <div class="divide50"></div>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <h4 class="aboutus-title">Objectives</h4>
                            <p class="aboutus-desc">Will contribute in helping those whom did not understand on how to spend their college money. Here, we are providing a basic manageable budget plan where you can edit it anytime you need to.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <h4 class="aboutus-title">Purposes</h4>
                            <p class="aboutus-desc">College Budget plan will help student save money for future, for "rainy days", for big purchases, for travel, est. Get in to the habit of saving!</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="aboutus-item">
                            <h4 class="aboutus-title">Ease of Use</h4>
                            <p class="aboutus-desc">To access the worksheet criteria, you will need to be a registered user first. Get ready to fill in some basic information and Let's get started NOW! Information at your fingertips.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /About us -->
			<!-- Services -->
            <div class="content-block parallax" id="services">
				<div class="container services-sec">
                <div id="profile">
  
<label>User Profile</label> 
<br/>
<em> Click here to back to <a href="userprofile.php"><strong>services</strong></a> page</em>
 </div>
    <div id="right">
     <div id="content">
     
         <p>Here is your Personal details<strong></strong></p>
        <strong><center>
    <table width="380" border="3" align="left" cellpadding="2" cellspacing="2">
    <tr>
        <th colspan="2" bgcolor="#9999FF" style="text-align: left" scope="row"><strong>PERSONAL DETAILS</strong></th>
        </tr>
      <tr>
        <th width="142" bgcolor="#9999FF" style="text-align: left" scope="row"><strong>FIRST NAME</strong></th>
        <td width="216"><strong><?php echo $row["fname"]; ?></strong></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>LAST NAME</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["lname"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>GENDER</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["gender"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>AGE</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["age"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>DATE OF BIRTH</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["dob"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>RACE</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["race"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>RELIGION</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["religion"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>ADDRESS</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["address"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>ZIP</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["zip"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>TOWN</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["town"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>CITY</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["city"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>STATE</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["state"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>COUNTRY</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["country"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>MOBILE</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["mobile"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>HOME</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["home"]; ?></strong></span></td>
      </tr>
    </table>
    <table width="380" border="3" cellspacing="2" cellpadding="2">
      <tr>
        <th colspan="2" bgcolor="#9999FF" style="text-align: left" scope="row"><strong>ACADEMIC DETAILS</strong></th>
        </tr>
      <tr>
        <th width="167" bgcolor="#9999FF" style="text-align: left" scope="row"><strong>UNIVERSITY NAME:</strong></th>
        <td width="189"><span style="text-align: left"><strong><?php echo $row["universityName"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>MATRIC NO:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["matricNo"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row">PROGRAM CODE:</th>
        <td><span style="text-align: left"><strong><?php echo $row["programCode"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>PROGRAM NAME:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["programName"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>FACULTY</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["faculty"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>CURRENT SEMESTER:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["cSem"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>TOTAL SEMESTERS:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["totalSem"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>TOTAL YEARS:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["totalYear"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>FINANCIAL RESOURCES:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["financial"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>OTHERS:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["othersF"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>ACCOUNT NO:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["acc"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>BANK NAME:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["bankName"]; ?></strong></span></td>
      </tr>
      <tr>
        <th bgcolor="#9999FF" style="text-align: left" scope="row"><strong>EMAIL:</strong></th>
        <td><span style="text-align: left"><strong><?php echo $row["email"]; ?></strong></span></td>
      </tr>
      <tr>
        <th colspan="2" bgcolor="#9999FF" style="text-align: left" scope="row">&nbsp;</th>
        </tr>
    </table> 
        </center></strong>


</div>
                </div>
                </div>
            
            <!-- #services -->

			<div class="content-block parallax" id="parallax">
				<div class="container">
					<h3 class="call-action pull-left">The true sign of intelligence is not knowledge but imagination.<br/>~Albert Einstein~</h3>
					<a href="http://www.brainyquote.com/" class="pull-right btn btn-o-white btn-lg">Get a free quote</a>
				</div>
			</div><!-- #parallax --></div><!--/#wrapper-->




		<script src="assets/js/jquery-2.1.3.min.js"></script>
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.js"></script>
		<script src="assets/js/jquery.actual.min.js"></script>
		<script src="assets/js/jquery.scrollTo.min.js"></script>
		<script src="assets/js/script.js"></script>
		<script src="assets/js/smoothscroll.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($){

		  	$(window).scroll(function() {
		  		
		  		console.log("asdf");

				if ($(window).scrollTop() > 100 ){
		    
		 		$('.top-header').addClass('shows');
		    
		  		} else {
		    
		   	 	$('.top-header').removeClass('shows');
		    
		 		};   	
			});

		  });

		jQuery('.scroll').on('click', function(e){		
				e.preventDefault()
		    
		  jQuery('html, body').animate({
		      scrollTop : jQuery(this.hash).offset().top
		    }, 1500);
		});


		</script>


	</body>
</html>
