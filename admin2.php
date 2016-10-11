<?php	
include('action.php');
include('header.php'); ?>


<?php include('navigation.php'); ?>
<div class='container'>
	<h3>Manage Users</h3>
	
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Tel No</td>
			</tr>
		</thead>

</ul>
		<tbody>
			<?php 
				$users = displayusers();
				foreach($users as $user){
					echo "<tr>";
						echo "<td>". $user['fname'] ."</td>";
						echo "<td>". $user['lname'] ."</td>";
						echo "<td>". $user['email'] ."</td>";
						echo "<td>". $user['telno'] ."</td>";
					echo "</tr>";
					
				}
			?>
		</tbody>
	</table>
</div>
<?php include('footer.php'); ?>