<?php
    session_start();
    if ($_SESSION['loggedin'] == true) {
        if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            include '../connect.php';

            $p_id = $_GET['id'];
            $email = $_SESSION['user'];

            // make a db call
            $sql = "DELETE FROM `cart` where `email`='$email' and `product_id`='$p_id'";
            $result = mysqli_query($conn, $sql);

            //redirect
            $url = (string)$_SERVER['HTTP_REFERER'];
            // ."".(string)"?response=true";
            header("Location: {$url}");
	        exit;
        }
    }
?>