<?php
    session_start();
    if ($_SESSION['loggedin'] == true) {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            include '../connect.php';

            // input
            $email = $_SESSION['user'];
            $type = $_POST['type'];
            $product_id = $_POST["id"];

            $image = $_POST["image"];
            $name = $_POST["name"];
        	$price = $_POST["price"];

            // make a db call
            $sql ="INSERT INTO `cart`(`email`, `product_type`, `product_id`, `image`, `product_name`, `product_price`) VALUES ('$email','$type','$product_id', '$image', '$name', '$price')";
            $result = mysqli_query($conn, $sql);
           


            //redirect
            $url = (string)$_SERVER['HTTP_REFERER'];
            // ."".(string)"?response=true";
            header("Location: {$url}");
	        exit;
        }
        
    
    }
    ?>