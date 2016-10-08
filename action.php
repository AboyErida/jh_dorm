<?php
	include('/class/member.php');
	$obj = new Members();
	
	if(isset($_REQUEST['stat'])){
		$fname = $_REQUEST['fname'];
		$lname = $_REQUEST['lname'];
		$email = $_REQUEST['email'];
		$telno = $_REQUEST['telno'];
		$username = $_REQUEST['uname'];
		$password = $_REQUEST['pword'];
		
		$obj->addUser($fname,$lname,$email,$telno,$username,$password);
	}
		
	function displayusers(){
		Global $obj;
		
		return $obj->getalluser();
	}