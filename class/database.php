<?php
	class Database{
		var $host="localhost";
		var $user="root";
		var $pass="";
		var $db_name="ict212";
		var $mysqli;
		
		function connectDB(){
			$this->mysqli = new mysqli($this->host,$this->user,$this->pass,$this->db_name);
			
			//echo $mysqli;
			if ($this->mysqli->connect_errno) {
				echo "Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
				return false;
			}else{
				return $this->mysqli;
			}
			
		}
		
		function initialize(){
			$db = $this->connectDB();
			if(!$db->select_db($this->db_name)){
				$dbcreate = "CREATE DATABASE IF NOT EXISTS '". $this->db_name ."'; .
				
				CREATE TABLE IF NOT EXISTS `users` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `fname` varchar(32) NOT NULL,
				  `lname` varchar(32) NOT NULL,
				  `email` varchar(24) NOT NULL,
				  `telno` varchar(16) NOT NULL,
				  `username` varchar(24) NOT NULL,
				  `password` text NOT NULL,
				  `status` int(11) NOT NULL DEFAULT '1',
				  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
				  PRIMARY KEY (`id`)
				);";
				$db->query($dbcreate);
				$db->select_db($this->db_name);
			}
			return $db;
		}
		
		function insertquery($sqlstr){
			
			if(!$this->mysqli->query($sqlstr)){
				echo "Query failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
				return false;
			}else{
				return true;
			}
		}
		#3
		//add a function that will query/select data from the database
		//and return the query result
		function selectquery($sqlstr){
			$res = $this->mysqli->query($sqlstr);
			
			if(!$this->mysqli->query($sqlstr)){
				echo "Query failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
				return false;
			}else{
				return $res;
			}
			//return the query result
			
		}

		function updatequery($sqlstr) {
			if(!$this->mysqli->query($sqlstr)){
				echo "Query failed: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
				return false;
			}else{
				return true;
			}
		}
	}