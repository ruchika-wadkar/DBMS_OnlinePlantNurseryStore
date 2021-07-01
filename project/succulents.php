<?php  
include 'connect.php'
?>


<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succulents</title>

    <link rel="stylesheet" type="text/css" href="webnav.css">
    <link rel="stylesheet" type="text/css" href="succulents.css">
    <link rel="stylesheet" type="text/css" href="webfooter.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<script>
function clickAlert() {
    alert("Item added successfully!");
}
</script>


<body>


    <?php  
include 'webnav.php'
?>


    <div class="Tax-banner">
        <h6>- As per guidelines, we are only delivering on certain govt-specified pincodes.</h6>
    </div>


    <div class="section-heading text-center mt-5">
        <h2>SUCCULENTS</h2>
        <div class="row">


            <?php

	$query = " SELECT * FROM `succulent` ";

	$queryfire = mysqli_query($conn, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
  

		while($product = mysqli_fetch_assoc($queryfire)){
			?>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <form method="POST" action="cart/AddToCart.php">
                    <div class="card mt-4 mb-4">
                        <img class="card-img-top" src="<?php echo $product['image'];  ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name'];  ?></h5>
                            <h4>Rs.<?php echo $product['price'];  ?><h4>
                                    <input type="hidden" name="type" value="succulent">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                    <input type="hidden" name="image" img src=".$product['image']."
                                        value="<?= $product['image'] ?>">
                                    <input type="hidden" name="price" value="<?= $product['price'] ?>">
                                    <input type="submit" name="add_to_cart" onclick="clickAlert()"
                                        class="btn btn-warning" value="Add To Cart">

                        </div>
                    </div>


                </form>
            </div>

            <?php		
		}
	}
	?>

        </div>

    </div>



    <footer class="text-center text-white" style="background-color: #ADDFAD;">
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright Reserved by
            <a class="text-dark" href="webfront.php">FYTA</a>
        </div>
    </footer>




    </div>


</body>

</html>