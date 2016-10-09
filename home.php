<?php require('u_header.php'); ?>

<?php
	include('/class/member.php');

	$obj = new Members();
	
	$result = $obj->getUserID($_SESSION["user"]);
	$user_account = $obj->getAccount($result['id']);

    if(isset($_POST['submit_pass']))
    {
        $cur_pass = SHA1($_POST['c_pass']);
        $new_pass = SHA1($_POST['n_pass']);
        
        $query = $obj->checkPassword($result['id']);
        if($query['password'] == $cur_pass) {
            $obj->changePass($result['id'], $new_pass);
            $message = "Password successfully changed!";
            echo "<script type='text/javascript'>alert('$message'); window.location='home.php' </script>";
        } else {
            $message = "Incorrect old password.";
            echo "<script type='text/javascript'>alert('$message'); </script>";
        }
    }
?>

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
						
                    </div>
                </div>
            </div>
        </div>
    </header>
	<br></br>
	<div class="containter" style="background-color:white; text-align:center;font-size:20px; text-decoration: none !important;">
	<div class="row" >
		<!--<ul style="display:inline;align:center;font-size:20px;color:white;border:2px;">-->
		<h2>Welcome <?php echo $_SESSION['user']; ?>!</h2>
	</div>

		<br></br>
		<div class="col-md-3 col-lg-3">
			<p>My Deposit Balance</p>
			<h3>P<?php echo number_format($user_account['balance'], 2); ?></h3>
		</div>
		<div class="col-md-3 col-lg-3">
			<p>My Monthly Bill</p>
			<h3>P<?php echo number_format($user_account['bill'], 2); ?></h3>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            <input type="password" placeholder="Enter Old Password" name="c_pass" class="form-control" /><br/>
                            <input type="password" placeholder="Enter New Password" name="n_pass" class="form-control"  id="mypass"/><br/>
                            <input type="password" placeholder="Confirm New Password" name="n_pass2" class="form-control" id="re_mypass"/><br/>
                            <input type="submit" name="submit_pass" value="Change Password" class="btn btn-info btn-block" />
                            <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                        </form>
                        <div id="pass_error"></div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="col-md-3 col-lg-3">
			<a href="ViewRS.php" class="btn btn-primary btn-lg" >View Payment History</a>
		</div>
		
		<div class="col-md-3 col-lg-3">
			<a href="#" data-toggle="modal" class="btn btn-primary btn-lg" data-target="#myModal">Edit Password</a>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
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

<?php require('u_footer.php'); ?>