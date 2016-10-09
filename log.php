<?php
session_start();

include('/class/member.php');
	//include('action.php');

	//this gets the value entered from the input fields username and password
	//$_POST and $_GET uses the name of the field to get the value
	$uname = $_POST["username"];
	$pword = SHA1($_POST["password"]);

	$obj = new Members();
		//calls the function to check credentials
	checkcredentials($uname,$pword);

	function checkcredentials($user,$pass){
			//checks if username and password is filled up properly
			//if the username and password is filled up, the page will be redirected to home.php
		Global $obj;

		if(strlen(trim($user))==0 || strlen(trim($pass))==0){
			$message = "Fill up fields properly. Go back to login page";
			echo "<script type='text/javascript'>alert('$message');  window.location = 'index.php'</script>";
		}else{
			if($obj->login($user,$pass)){
				$_SESSION["LOGGEDIN"] = true;
				$_SESSION["user"] = $user;
				header('Location:home.php');
			}else{
				$message = "Username and/or Password incorrect.\\nTry again.";
				echo "<script type='text/javascript'>alert('$message');  window.location = 'index.php'</script>";
			}
		}
	}