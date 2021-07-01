<?php
	// $has_session = session_status() == PHP_SESSION_ACTIVE;
	// if ($has_session) {
	// 	header("Location: http://localhost/website/webfront.php");
	// 	exit();
	// }
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title> Login Page </title>
    <link rel="stylesheet" type="text/css" href="weblogin.css">
    <link rel="stylesheet" type="text/css" href="webnav.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<script type="text/javascript">
function showloginAlert() {
    swal({
        title: "Welcome!",
        text: "You are Successfully Logged In",
        type: "success"
    }).then(function() {
        window.location = "http://localhost/website/webfront.php";
    });


}
</script>

<script type="text/javascript">
function showloginError() {
    swal("Error!", "Invalid Password or Email!", "error");
}
</script>


<body>
    <?php 
include 'webnav.php'
?>

    <?php 
include 'chunks/logsess.php'
?>

    <form action="weblogin.php" method="POST">
        <div class="cont mt-3">

            <div class="loginbox mt-5">
                <img src="photos/loginavatar2.jpg" class="avatar">

                <div class="col-lg-12 px-2 pt-2">
                    <h1 class="font-weight-bold py3"> Login</h1>
                    <h5>Sign into your account!</h5>
                    <form>
                        <div class="form-row">
                            <div class="col-lg-10">
                                <label for="inputusername4"></label>
                                <input type="text" name="firstname" class="form-control" id="inputusername4"
                                    placeholder="Username" required>
                            </div>
                            <div class="col-lg-10">
                                <label for="inputEmail4"></label>
                                <input type="email" name="email" class="form-control" id="inputEmail4"
                                    placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-10">
                                <label for="inputPassword4"></label>
                                <input type="password" name="password" class="form-control" id="inputPassword4"
                                    placeholder="Password" required>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-lg-10">
                                <button type="submit" name="submit" class="btn btn-success mt-3 mb-3">Login</button>

                            </div>
                        </div>


                        <a href="#">Forgot Password?</a>

                        <p>Don't have an account? <a href="signin.php">Sign-In here!

                </div>
            </div>
        </div>
    </form>
    <footer class="text-center  mt-5 py-2">
        <p>-<b>All Copyrights &copy; Reserved By</b> FYTA</p>
    </footer>


</body>

</html>