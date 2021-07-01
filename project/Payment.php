<?php 
include 'connect.php'
?>


<?php 
session_start();
$email = $_SESSION['user'];
$query = " SELECT * FROM `cart` where `email` = '$email'";

  $queryfire = mysqli_query($conn, $query);

  $num = mysqli_num_rows($queryfire);
$total = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="payment.css">
    <link rel="stylesheet" type="text/css" href="webnav.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <title>Payment</title>
</head>

<script type="text/javascript">
function showpaymentalert() {
    alert("Payment Successfully!");

}
</script>

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
                <h1> Payment </h1>
            </div>

            <div class="col-lg-6">

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

                        <form method="POST" action="cart/AddToPayment.php">

                            <tr>
                                <td><img src='<?php echo $values["image"]; ?>' width="100" height="100" /></td>
                                <td><?php echo $values["product_name"];?></td>
                                <td><?php echo $values["product_price"];?></td>
                                <input type="hidden" name="product_name" value="<?= $values["product_name"];?>">
                                <input type="hidden" name="product_price" value="<?= $values["product_price"]; ?>">
                                <input type="hidden" name="delivery_address" value="delivery_address">
                                <input type="hidden" name="amount_paid" value="amount_paid">

                            </tr>


                            <?php  
					} }
					?>

                            <tr>
                                <td> </td>
                                <td>
                                    <h5>Total Pay: ₹<?php echo $total ?><h5>
                                </td>
                            <tr>
                    </tbody>
                </table>
            </div>



            <div class="col-lg-6">
                <div class="border bg-light rounded p-4">
                    <div class="mb-3">
                        <label for="exampleInputname1" class="form-label">Delivery_Address</label>
                        <input type="text" name="delivery_address" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputaddress1" class="form-label">Confirm Amount</label>
                        <input type="text" name="amount_paid" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">


                    </div>





                    <input type="submit" name="payment" onclick="showpaymentalert()" class="btn btn-warning">
                    </input>
                </div>
            </div>

            </form>




            <footer class="text-center text-white" style="background-color: #ADDFAD;">
                <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2021 Copyright Reserved by
                    <a class="text-dark" href="webfront.php">FYTA</a>
                </div>
            </footer>
</body>

</html>