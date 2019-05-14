<?php 
	session_start(); 
	$username = "";
	$email = "";
	$errors = array();
	$db = mysqli_connect('localhost','root','','login');
	if(isset($_POST['register'])){
		$username= ($_POST['username']);
		$email= ($_POST['email']);
		$password_1= ($_POST['password_1']);
		$password_2= ($_POST['password_2']);

			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			$sql="SELECT username FROM user WHERE username='$username'";
		    $result=mysqli_query($db,$sql);
		    $num = mysqli_num_rows($result);
		    if ($num !=0){
		    array_push($errors, "Username already exists, try another");
}
			if (empty($email)) {
			    array_push($errors, "Email is required");
			} 
			$sql="SELECT email FROM user WHERE email='$email'";
		    $result=mysqli_query($db,$sql);
		    $num = mysqli_num_rows($result);
		    if ($num !=0){
		    array_push($errors, "Email already exists, try another");
}
			else {

			    if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email'])) {
			        $email = $_POST['email'];
			    } else {
			         array_push($errors, "Email address is invalid");
			    }
			}
			if (empty($password_1)) {
				array_push($errors, "password is required");
			}
			if ($password_1 != $password_2) {
				array_push($errors, "passwords do not match");
			}
			if (count($errors) == 0) {
				$password = md5($password_1);
				$sql = "INSERT INTO user (username,email,password) VALUES ('$username','$email','$password')";
				mysqli_query($db,$sql);
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You have succesfully registered";
				header('location: index.php');
			}

	}
	if (isset($_POST['login'])) {
		$username= ($_POST['username']);
		$password= ($_POST['password']);

			if (empty($username)) {
				array_push($errors, 'Username is required');
			}
			if (empty($password)) {
				array_push($errors, 'Password is required');
			}
			if (count($errors) == 0) {
				$password = md5($password);
				$query = "SELECT * FROM user WHERE username ='$username' AND  password='$password'";
				$result = mysqli_query($db, $query);
				if (mysqli_num_rows($result) == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: index.php');
				}else{
					array_push($errors, "Incorrect login informations");
				}
			}
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

?>