<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>




    <!-- NAVBAR -->


    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e8e8e8;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <img src="photos/logo3new.jpg" alt="" width="80" height="40">


            <!-- till what point do you want the screen to reduce(toggler)  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span> <!-- gives to the hamberger (toggler-icon)-->
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="webfront.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:	#D3D3D3;">
                            <a class="dropdown-item" href="succulents.php">Succulents</a>
                            <a class="dropdown-item" href="herbs.php">Herbs</a>
                            <a class="dropdown-item" href="orchids.php">Orchids</a>
                            <a class="dropdown-item" href="cactus.php">Cactus</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="PotsAndPlanters.php">PotsAndPlanters</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pots & Planters
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:	#D3D3D3;">
                            <a class="dropdown-item" href="PotsAndPlanters.php"></a>
                            <a class="dropdown-item" href="#"></a>

                            <a class="dropdown-item" href="#">Planters</a>
                        </div>
                    </li> -->
                </ul>

                <ul class="navbar-nav navbar-right ">

                    <?php 
if(!isset($_SESSION['firstname'])) { 

        ?><li class="nav-item">
                        <a class="nav-link" href="weblogin.php">Login&#128373</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="websignin.php">SignIn&#9997</a>
                    </li>
                    <?php }

        else{
          ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php echo $_SESSION['firstname'];  ?>&#128130</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Cart.php">Cart🛒</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="Cart.php">My Orders&#128092</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="weblogout.php">Logout</a>
                    </li>



                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>