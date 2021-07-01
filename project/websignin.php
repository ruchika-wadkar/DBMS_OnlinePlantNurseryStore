<?php 
  include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="stylesheet" type="text/css" href="websignin.css">
    <link rel="stylesheet" type="text/css" href="webnav.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

<script type ="text/javascript">
	 function showAlert(){
        swal({
				title: "Welcome To The Fyta Family!",
				text: "You are Successfully Registered, PLease Login Now",
				type: "success"
			}).then(function() {
				window.location = "http://localhost/website/weblogin.php";
			});
	 }
	 </script>

<script type ="text/javascript">
	 function showError(){
		swal("Error!", "Something went Wrong!", "error");
	 }
	 </script>

<script type ="text/javascript">
	 function showsignError(){
		swal("Error!", "Invalid password!", "error");
	 }
	 </script>

<script type ="text/javascript">
	 function showexistAlert(){
		swal("Error!", "Email already exists!", "error");
	 }
	 </script>


<body>
<?php 
include 'webnav.php'
?>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phoneno = $_POST["phoneno"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $gender = $_POST["gender"];
   
// check whether this username exist
    $existSql = "SELECT * FROM `signuser` WHERE email = '$email'";
    $result = mysqli_query($conn , $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        echo '<script type = "text/javascript">showexistAlert();</script>'; 
        // $showError = "email already exists";
    }

    else{

        if(($password == $cpassword)){
            $sql ="INSERT INTO `signuser`(`firstname`, `lastname`, `email`, `phoneno`, `password`, `cpassword`, `city`, `state`, `gender`, `date`) VALUES ('$firstname','$lastname','$email','$phoneno','$password','$cpassword','$city','$state','$gender', current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if($result){
                echo '<script type = "text/javascript">showAlert();</script>';  
            }
            else{
                echo '<script type = "text/javascript">showError();</script>';
            }
        }
        else{
            echo '<script type = "text/javascript">showsignError();</script>';
        }
}
}



?>

<form action = "websignin.php" method ="POST">
<div class="container register mb-2">
    <div class="row">
        <div class="col-md-3 register-left">
            
            <h3><b>Hello!</b></h3>
            <p> Welcome to the FYTA Family!</p>
            
        </div>
   
        <div class="col-md-9 register-right">           
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <h3 class="register-heading">Make a New Account!</h3>
            <div class="row register-form">
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name ="firstname" placeholder="First Name" value="" />
            </div>
            <div class="form-group">
            <input type="email" class="form-control" name = "email" placeholder="Email" value="" />
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name = "password" placeholder="Password" value="" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name = "city" placeholder ="City" value="" />
            </div>
            <div class="form-group">
            <div class="maxl">
            <label class="radio inline"> 
                <input type="radio" name="gender" value="male" >
                <span> Male </span> 
            </label>
            <label class="radio inline"> 
                <input type="radio" name="gender" value="female">
                <span>Female </span> 
            </label>
            </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <input type="text" class="form-control" name = "lastname" placeholder="Last Name" value="" />
            </div>
            <div class="form-group">
            <input type="text" minlength="10" maxlength="10" name="phoneno" class="form-control" placeholder="Your Phone " value="" />
            </div>

            <div class="form-group">
            <input type="password" class="form-control" name = "cpassword" placeholder="Confirm Password" value="" />
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name = "state" placeholder="State" value="" />
            </div>


            <input type="submit"  name ="submit" class="btnRegister"  value="Register"/>
            </div>
            </div>
            </div>

            </div>
            </div>
            </div>
            </div>
            </div>
            </form>

  <footer class = "text-center  mt-2 py-2.5">
                <p>-<b>All Copyrights &copy; Reserved By</b> FYTA</p>
                </footer> 



</body>
</html>
