<?php require('a_header.php'); ?>

<?php
	include('../class/member.php');

	$obj = new Admin();

	$users = $obj->getTenants();

?>
	<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        View <small>Tenants</small>
                    </h1>
                </div>
            
				<div class="col-lg-12">
					
                    <table id="ten_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <th>Tenant Name</th>
                            <th width="15%">Action</th>
                        </thead>
                        <tbody>
                        <?php foreach($users as $row) { ?>
                            <tr>
                                <td><?php echo $row['lname'] . ", " . $row['fname']; ?></td>
                                <td>
                                	<a class="btn btn-success btn-sm" href="pay-amt.php?id=<?php echo $row['id']; ?>" aria-label="Settings" target="_blank">
								  		<i class="fa fa-usd" aria-hidden="true"></i> Pay
									</a>
									<a class="btn btn-primary btn-sm" href="pay-hist.php?id=<?php echo $row['id']; ?>" aria-label="Settings" target="_blank">
								  		<i class="fa fa-list" aria-hidden="true"></i> History
									</a>
								</td>
                            </tr>
                        </td>
                        <?php } ?>
                        </td>
                    </table>
                    
				</div>
				
			</div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
<?php require('a_footer.php'); ?>