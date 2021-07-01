<!-- PAYMENT BEFORE CHANGES: -->




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

<!-- <script type="text/javascript">
function showpaymentalert() {
    swal({
        title: "Your Order Has Been Placed!",
        text: "Thankyou for trusting FYTA!",
        type: "success"
    }).then(function() {
        window.location = "http://localhost/website/webfront.php";
    });
}
</script> -->

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
                        <tr>
                            <td><img src='<?php echo $values["image"]; ?>' width="100" height="100" /></td>
                            <td><?php echo $values["product_name"];?></td>
                            <td><?php echo $values["product_price"];?></td>
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
                        <label for="exampleInputname1" class="form-label">Name:</label>
                        <input type="text" name=" username" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputaddress1" class="form-label">Address:</label>
                        <input type="text" name="useraddress" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputamount1" class="form-label">Mode of payment</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <button type="button" name="payment" onclick="showpaymentalert()" class="btn btn-warning">Pay
                        Now</button>
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










































































****************************************************************************
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Webslesson Demo | Simple PHP Mysql Shopping Cart</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <br />
        <br />
        <br />
        <h3>Tutorial - <a href="http://www.webslesson.info/2016/08/simple-php-mysql-shopping-cart.html"
                title="Simple PHP Mysql Shopping Cart">Simple PHP Mysql Shopping Cart</a></h3><br />
        <br /><br />
        <?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
        <div class="col-md-4">
            <form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;">
                    <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

                    <h4 class="text-info"><?php echo $row["name"]; ?></h4>

                    <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

                    <input type="text" name="quantity" value="1" class="form-control" />

                    <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
                        value="Add to Cart" />

                </div>
            </form>
        </div>
        <?php
					}
				}
			?>
        <div style="clear:both"></div>
        <br />
        <h3>Order Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="15%">Total</th>
                    <th width="5%">Action</th>
                </tr>
                <?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
                <tr>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td><?php echo $values["item_quantity"]; ?></td>
                    <td>$ <?php echo $values["item_price"]; ?></td>
                    <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                    <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                class="text-danger">Remove</span></a></td>
                </tr>
                <?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
					}
					?>

            </table>
        </div>
    </div>
    </div>
    <br />
</body>

</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>
































<!-- <section class="shop-test section-padding-100-0">
<div class="container">
    <div class="row mt-5">
        <div class="col-12">
             <section class="cards padding-section">
                <div class="section-heading text-center">
                 <h2>SUCCULENTS</h2>
                 <br>
                <div class="card-deck mt-2 mb-4">
                  <div class="card">
                    <img class="card-img-top" src="photos/succulents3.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Crassula Capitella Campfire</h5>
                      <h4>Rs.470<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                      
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="photos/succulent1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Sedeveria Green Rose </h5>
                      <h4>Rs.300<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="photos/succulent2.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Echeveria Elegans</h5>
                      <h4>Rs.550<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                    </div>
                  </div>
                </div>
                <div class="card-deck  mt-2 mb-4">
                  <div class="card">
                    <img class="card-img-top" src="photos/succulent4.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Crassula Capitella 'Thyrsiflora'</h5>
                      <h4>Rs.430<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="photos/succulents1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Crassula Perforata</h5>
                      <h4>Rs.300<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                      
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="photos/succulents6.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Haworthia Reinwardtii</h5>
                      <h4>Rs.400<h4>
                      <a href="#" class="btn btn-warning">ADD TO CART</a> <select><option>1</option><option>2</option> <option>3</option><option>4</option> <option>5</option><option>6</option> <option>7</option><option>8</option><option>9</option><option>10</option></select>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
              </div>
             </section> -->