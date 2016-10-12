<?php require('a_header.php'); ?>

<?php
	include('../class/member.php');

	$obj = new Admin();

    if(isset($_GET['id'])) {
        $user_id = $_GET['id'];

        $user = $obj->getUser($user_id);
        $user_history = $obj->getHistory($user_id);
    }
    
?>
	<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Payment <small>History</small>
                    </h1>
                </div>
                
				<div class="col-lg-12">
                    <h4>Tenant Name: <?php echo $user['lname'] . ", " . $user['fname']; ?></h4>
                    <table id="ten_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <th>Amount Paid</th>
                            <th>Date</th>
                        </thead>
                        <tbody>
                        <?php foreach($user_history as $row) { ?>
                            <tr>
                                <td>P<?php echo number_format($row['amount'],2); ?></td>
                                <td><?php echo $row['date']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    
                </div>
				
			</div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php require('a_footer.php'); ?>