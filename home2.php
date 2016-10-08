<!DOCTYPE html>
<html lang="en">
<head>
<?php session_start(); 


?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JTH Dormitory Online Reservation</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
	<link href="css/style1.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Room Reservation system</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					  <li class="page-scroll">
                        <a href="index.php">Logout</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/logo.jpg" alt="" style="height:240px; width:360px; border-radius:30px">
                    <div class="intro-text">
                        <span class="name">Welcome to JTH Dormitory Online Reservation</span>
                        <hr class="star-light">
                        <span class="skills">Talamban, Rosillos Road, Cebu City, Central Visayas</span>
							<ul>

                    </div>
                </div>
            </div>
        </div>
    </header>
	<br></br>
	<div class="containter" style="background-color:white; text-align:center;font-size:20px;">
	<div class="row" >
		<!--<ul style="display:inline;align:center;font-size:20px;color:white;border:2px;">-->
					<h3>
  <div style="align:center;"><a href="#">Welcome <?php echo $_SESSION['user']; ?>!</a></div>
</h3>
			<br></br>
			<div class="col-md-3 col-lg-3"><a href="ViewDP.php">View Deposit Balance</a></div>
			<div class="col-md-3 col-lg-3"><a href="ViewMB.php">View Monthly Bills</a></div>
			<div class="col-md-3 col-lg-3"><a href="ViewRS.php">View Room Status</a></div>
			<div class="col-md-3 col-lg-3"><a href="EditPass.php">Edit Password</a></div>
			<div class="col-md-3 col-lg-3"><center><a href="EditPass.php">Register Tenant</a></div>
	
	</div>
	</div>
	
<div class="container">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3"></div>
			<div class="col-lg-6 col-md-6">
				<form id = "registerform">
					<h4>User Information</h4>
					<input type="text" class="form-control" name="fname" placeholder="First Name" /><br />
					<input type="text" class="form-control" name="lname" placeholder="Last Name" /><br />
					<input type="email" class="form-control" name="email" placeholder="Email" /><br />
					<input type="tel" class="form-control" name="telno" placeholder="Contact #" /><br />
					<h4>User Credentials</h4>
					<input type="text" class="form-control" name="uname" placeholder="Username" /><br />
					<input type="password" class="form-control" name="pword" placeholder="Password" /><br /><br />
					<input type="hidden" name = "stat" value="stat">
					<button id="submit" class="btn btn-success">REGISTER</button>
				</form>
			</div>
			<div class="col-lg-3 col-md-3"></div>
		</div>
	</div>
</div>
	

	  <body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Room Reservation system</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					  <li class="page-scroll">
                        <a href="index.php">Logout</a>
                    </li>
						<li class="page-scroll">
                        <a href="#register">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Talamban, Rosillos Road
                            <br> Cebu City, Central Visayas</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a target="_blank" a href="https://www.facebook.com/jason.ty.18" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Members</h3>
                        <p>Jason Ty</p>
						<p>Christian Cuartero</p>
						<p>Chris Pesudas</p>
						<p>Reden Remorta</p>
						<p>Servando Danilo Erida Jr.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; JTH Dormitory
                    </div>
                </div>
            </div>
        </div>
    </footer>

	    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
	

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
	<script src = "js/aboy.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
