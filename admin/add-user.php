<?php require('a_header.php'); ?>
	<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add <small>Tenant</small>
                    </h1>
                </div>
            
				<div class="col-lg-6 col-md-6">
					<form id="registerform">
						<h4>User Information</h4>
						<input type="text" class="form-control" name="fname" placeholder="First Name" required/><br />
						<input type="text" class="form-control" name="lname" placeholder="Last Name" required/><br />
						<input type="email" class="form-control" name="email" placeholder="Email" required/><br />
						<input type="tel" class="form-control" name="telno" placeholder="Contact #" required/><br />
						<h4>User Credentials</h4>
						<input type="text" class="form-control" name="uname" placeholder="Username" required/><br />
						<input type="password" class="form-control" name="pword" placeholder="Password" required/><br /><br />
						<input type="hidden" name="stat" value="stat">
						<button id="submit" class="btn btn-success">Add</button>
					</form>
				</div>
				
			</div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php require('a_footer.php'); ?>