<?php
session_start();
include "config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);
	if (empty($uname) && empty($pass)) {
		header("location: ../login.php?error=Username and Password is required");

	}
	if (empty($uname)) {
		header("location: ../login.php?error=Username is required");
	} else if (empty($pass)) {
		header("location: ../login.php?error=Password is required");
	} else {
		$sql = "SELECT * FROM users WHERE username='$uname'";
		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $uname) {
				if (password_verify($pass, $row['password'])) {
					$_SESSION["loggedin"] = true;
					$_SESSION["id"] = $row['user_id'];
					$_SESSION["session_picture"] = $row['profile_pic'];
					$_SESSION["username"] = $row['user_id'];
					$_SESSION["firstname"] = $row['firstname'];
					$_SESSION["lastname"] = $row['lastname'];
					$_SESSION["role_id"] = $row['role_id'];
					$_SESSION["email"] = $row['email_add'];
					$sql = mysqli_query($con, "INSERT INTO `logs`(`user_id`, `log_name`) 
					VALUES ('" . $_SESSION["id"] . "','login')");
					header("location: ../app/");			
				} else {
					header("Location: ../login.php?error=Incorrect password");			
				}
			} else {
				header("Location: ../login.php?error=Incorrect username");		
			}
		} else {
			header("Location: ../login.php?error=Username not Exist.");	
		}
	}
} else {
	header("Location: ../login.php?error=Username/Password is Required");
}