<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include 'connect.php';
    $check = false;
	$firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

	$sql = "SELECT * FROM `signuser` WHERE (firstname = '$firstname' AND email = '$email') AND password = '$password'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	 
	if($num == 1){
		$check == true;
		$_SESSION['loggedin'] = true;
		$_SESSION['firstname'] = $firstname;
		$_SESSION['user'] = $email;
		// header("Location: http://localhost/website/webfront.php");
		// exit();
		echo '<script type = "text/javascript">showloginAlert();</script>';
		
	}

	else{
		echo '<script type = "text/javascript">showloginError();</script>';
	}
}
?>