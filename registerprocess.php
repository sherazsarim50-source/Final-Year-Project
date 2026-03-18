<?php 
session_start();
require_once 'config/connect.php'; 
if(isset($_POST) & !empty($_POST)){

	//$email = mysqli_real_escape_string($connection, $_POST['email']);
	$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
	$pw = $_POST['password'];
	$pw2 = $_POST['passwordagain'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$password1 = password_hash($_POST['passwordagain'], PASSWORD_DEFAULT);
	$check = "SELECT * FROM users WHERE email='$email'";
	$verify= mysqli_query($connection, $check);
	if(mysqli_num_rows($verify)>0){
		header("location: login.php?message=3");
	}
	else{
		if($pw != $pw2){
			header("location: login.php?message=6");
		}
		else{

		echo $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	if($result){
		//echo "User exits, create session";
		$_SESSION['customer'] = $email;
		$_SESSION['customerid'] = mysqli_insert_id($connection);
		header("location: edit-address.php");
	}
		}
}


}
?>

