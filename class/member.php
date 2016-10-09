<?php 
	include('database.php');
	
	class Members{
		var $db;
		
		function __construct(){
			$this->db = new Database();
			$this->db->initialize();
		}

		function checkPassword($user_id) {
			$sqlstr = "SELECT password FROM users WHERE id='$user_id'";
			$result = $this->db->selectquery($sqlstr);
			
			return mysqli_fetch_assoc($result);
		}
		
		function addUser($fname,$lname,$email,$telno,$username,$password){
			/*$val = array("fname"=>$fname,
				"lname"=>$lname,
				"email"=>$email,
				"telno"=>$telno,
				"username"=>$username,
				"password"=>$password
			);*/
			$strinsert="INSERT INTO users (fname,lname,email,telno,username,password) VALUES('$fname','$lname','$email','$telno','$username',SHA1('$password'))";
			
			#1
			//check if the username and email already exists
			//if it exists prompt a message that the user already exist and do not proceed in adding the user
			//if the user does not exist, proceed in adding the user
			$strcheck = "SELECT * FROM users WHERE username='$username' OR email='$email'";
			$result = $this->db->selectquery($strcheck);
			
			if($result->num_rows > 0){
				echo "Username or email already exist";
			}else{
			//procceed insert
				if($this->db->insertquery($strinsert)) {
					echo "User added";
				}else{
					//echo "Error adding user: ". $this->db;
					print_r($this->db);
				}
			}
		}
		#2
		//this will check if the user exists
		//if the user exist return true, else false
		function login($username,$password) {
			$sqlstr = "SELECT username, password FROM users WHERE username='$username' AND password='$password'";
			
			$result = $this->db->selectquery($sqlstr);
			if($result->num_rows >0){
				return true;
			}
			else{
				return false;
			}
		}

		function changePass($user_id,$new_pass) {
			$sqlstr = "UPDATE users SET password='$new_pass' WHERE id='$user_id'";
			$result = $this->db->updatequery($sqlstr);
			
			return $result;
		}
		
		//return the list of all active users
		function getalluser() {
			$sqlstr = "SELECT id,fname,lname,email,telno FROM users WHERE status=1";
			
			$result = $this->db->selectquery($sqlstr);
			return $result;
		}
		
		function getUserID($username) {
			$sqlstr = "SELECT id FROM users WHERE username='$username'";
			$result = $this->db->selectquery($sqlstr);
			
			return mysqli_fetch_assoc($result);
		}
		
		function getAccount($user_id) {
			$sqlstr = "SELECT * FROM account WHERE user_id='$user_id'";
			$result = $this->db->selectquery($sqlstr);
			
			return mysqli_fetch_assoc($result);;
		}
	}