<?php
    session_start();


    if ($_SESSION['loggedin'] == true) {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            
            include '../connect.php';
            
  
            // input
            $email = $_SESSION['user'];
            $product_name = $_POST["product_name"];
            $product_price= $_POST["product_price"];
 
            
            $delivery_address = $_POST["delivery_address"];
        	$amount_paid = $_POST["amount_paid"];
         
            $sql ="INSERT INTO `payment`(`email`, `product_name`, `product_price`, `delivery_address`, `amount_paid`) VALUES ('$email','$product_name', '$product_price', '$delivery_address', '$amount_paid')";
            $result = mysqli_query($conn, $sql);
            

            // $url = (string)$_SERVER['HTTP_REFERER'];
            // // ."".(string)"?response=true";
            // header("Location: {$url}");
	        // exit;

            
            
        
        }
    }

            ?>
<script>
window.location.href = "http://localhost/website/webfront.php";
</script>