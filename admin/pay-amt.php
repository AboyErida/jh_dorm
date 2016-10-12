<?php require('a_header.php'); ?>

<?php
	include('../class/member.php');

	$obj = new Admin();

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $user = $obj->getUser($user_id);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $amount = $_POST['mon_amt'];

        if($user_id) {
            $result = $obj->insertAmount($user_id, $amount, date('Y-m-d'));

            if($result) {
                $message = "Amount successfully paid!";
                echo "<script type='text/javascript'>alert('$message'); window.location='pay-amt.php?id=$user_id' </script>";
            }
        }
    }
?>
	<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Tenant <small>Payment</small>
                    </h1>
                </div>
                
				<div class="col-lg-6 col-md-6">
					<form method="POST">
                        <h4>Tenant Name: <?php echo $user['lname'] . ", " . $user['fname']; ?></h4>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Peso Amount</label>
                            <div class="input-group">
                                <div class="input-group-addon">P</div>
                                    <input type="text" class="form-control" name="mon_amt" placeholder="Peso Amount" pattern="[0-9]+([\.|,][0-9]+)?" title="Please enter a positive number (maximum 2 decimal places)" required>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                    </form>
				</div>
				
			</div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php require('a_footer.php'); ?>