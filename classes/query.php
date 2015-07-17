<?php

	class query {
				
		//get userID from email
		public function getUserID() {
			return "SELECT UserID FROM Users WHERE Email = ? LIMIT 1";
		}
		
		//get password from email
		public function getPassword() {
			return "SELECT Password FROM Users WHERE Email = ? LIMIT 1";
		}
		
		//get userID and Name from email
		public function getUserInfo() {
			return "SELECT UserID, FirstName, Level FROM Users WHERE Email = ? LIMIT 1";
		}
		
		//insert new user
		public function insertUser() {
			return "INSERT INTO Users (FirstName, LastName, Email, Password) Values(?,?,?,?)";
		}
		
		
	}
?>