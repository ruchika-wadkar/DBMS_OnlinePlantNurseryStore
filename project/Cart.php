<?php 
include 'connect.php'
?>

<?php  
session_start();


// check if logged in 
// if ($_SESSION['loggedin'] != true) {
//   header("Location:http://localhost/website/weblogin.php");
//   exit; // later change - redirect to login
// } else {
  // make db call to fetch cart information
  $email = $_SESSION['user'];
  $query = " SELECT * FROM `cart` where `email` = '$email'";

	$queryfire = mysqli_query($conn, $query);

	$num = mysqli_num_rows($queryfire);
  $total = 0;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="webnav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="Cart.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Your Cart</title>
</head>

<body>
    <?php 
include 'webnav.php'
?>

    <div class="Tax-banner">
        <h6>- As per guidelines, we are only delivering on certain govt-specified pincodes.</h6>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-4">
                <h1> Your Cart </h1>
            </div>

            <div class="col-lg-9">
                <table class="table table-hover">
                    <thead class="text-center">
                        <tr>

                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 

if($num > 0){
  

  while($values = mysqli_fetch_assoc($queryfire)){

       $total = $total + ($values["product_price"]);
         ?>
                        <tr>
                            <td><img src='<?php echo $values["image"]; ?>' width="100" height="100" /></td>
                            <td><?php echo $values["product_name"];?></td>
                            <td><?php echo $values["product_price"];?></td>
                            <!-- <td><input class="text-center" type="number" value="$value[Quantity]" min='1' max='5'
                                    placeholder="1"></td> -->
                            <td><a href="cart/RemoveFromCart.php?id=<?php echo $values["product_id"]; ?>"><span
                                        class="text-danger">Remove</span></a></td>

                        </tr>


                        <?php
					} }
					
					?>



                    </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h3> Total Payable:</h3>
                    <br>
                    <h5 class="text-right">Rs.<?php echo $total ?> </h5>
                    <br>
                    <button type="button" name="payment" onclick="location.href='Payment.php'"
                        <?php if ($total == 0) { echo 'disabled'; } ?> class="btn btn-info">Proceed To
                        payment</button>
                </div>
            </div>
        </div>
    </div>

    </div>


    <footer class="text-center text-white" style="background-color: #ADDFAD;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright Reserved by
            <a class="text-dark" href="webfront.php">FYTA</a>
        </div>
    </footer>
</body>

</html>