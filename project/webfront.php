<?php  
include 'connect.php'

?>

<?php  
session_start();



?>


<!DOCTYPE html>
<html lang="en">
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Fyta</title>
    <link rel="stylesheet" type="text/css" href="webfront.css">
    <link rel="stylesheet" type="text/css" href="webnav.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="icon" href="img/core-img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="webfooter.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>

    <?php  
include 'webnav.php'

?>
    <div class="Tax-banner">
        <h6>- As per guidelines, we are only delivering on certain govt-specified pincodes. Stay Safe, Wear Mask!</h6>
    </div>

    <div class="container-section">
        <section class="banner mt-3" id="banner">
            <div class="content mt-3 ">
                <h2>Welcome to FYTA </h2>
                <p>Set your Plant Abode with us.<br>
                    We bring you a variety of plants aesthetics with a sense of visual apperence.
                </p>
                <!-- <a href ="webshop.php" class = "btn">Explore </a> -->

            </div>
    </div>
    </section>


    <section class="categories mt-5">
        <div class="section-heading text-center">
            <h2>OUR COLLECTION</h2>
            <p>We provide the perfect collection for your every Mood!.</p>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-12 cate-left">
                        <div class="row clear">
                            <div class="col-md-8 gutter">
                                <a href="">
                                    <div class="categories-item">
                                        <img src="photos/categories-1.jpg" alt="">
                                        <div class="categories-info">
                                            <h4 class="categories-info-name">Table Tree Plant</h4>
                                            <!-- <p class="categories-info-count">(50 Items)</p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 gutter">
                                <a href="">
                                    <div class="categories-item">
                                        <img src="photos/categories-2.jpg" alt="">
                                        <div class="categories-info">
                                            <h4 class="categories-info-name">Indoor Plants</h4>
                                            <!-- <p class="categories-info-count">(75 Items)</p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row clear">
                            <div class="col-md-4 gutter">
                                <a href="">
                                    <div class="categories-item">
                                        <img src="photos/categories-4.jpg" alt="">
                                        <div class="categories-info">
                                            <h4 class="categories-info-name">Best selling</h4>
                                            <!-- <p class="categories-info-count">(55 Items)</p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-8 gutter">
                                <a href="">
                                    <div class="categories-item">
                                        <img src="photos/categories-5.jpg" alt="">
                                        <div class="categories-info">
                                            <h4 class="categories-info-name">House <br> Plants</h4>
                                            <!-- <p class="categories-info-count">(50 Items)</p> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 gutter d-none-19">
                        <a href="">
                            <div class="categories-item">
                                <img src="photos/categories-3.jpg" alt="">
                                <div class="categories-info">
                                    <h4 class="categories-info-name">Cactus Plant</h4>
                                    <!-- <p class="categories-info-count">(40 Items)</p> -->
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>



    <!-- ##### Service Area Start ##### -->
    <section class="our-services-area bg-light section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>OUR SERVICES</h2>
                        <p>We provide the perfect service for you.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="alazea-service-area mb-100">

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="100ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="photos/pot.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Plants Care</h5>
                                <p>FYTA is a platform for Urban India to stay close to nature. FYTA offers unique
                                    solutions for every person to create your green patch. </p>
                                <!-- <p>Plant care is the act of growing plants and ensuring they have the necessary conditions for survival and continuing growth.</p>                            -->
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="300ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="photos/drop.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5> Nursery Workshop</h5>
                                <p>Plant care is the act of growing plants and ensuring they have the necessary
                                    conditions for survival and growth.We conduct every month Nursery worshop to guide
                                    our customers with everything!</p>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="single-service-area d-flex align-items-center wow fadeInUp" data-wow-delay="500ms">
                            <!-- Icon -->
                            <div class="service-icon mr-30">
                                <img src="photos/truck.png" alt="">
                            </div>
                            <!-- Content -->
                            <div class="service-content">
                                <h5>Delivering Happiness</h5>
                                <p>Over 100,000+ Plants Shipped! <br>Found great new homes!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="alazea-video-area mb-100">
                        <img src="photos/potplant.jpg" alt="PotPlant Image"> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ##### About Area Start ##### -->
    <section class="about-us-area  section-padding-100-0">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>ABOUT US</h2>



                        <br>
                        <p>We at FYTA which is at Malad West, Mumbai, Maharashtra, aim to promote environmental
                            sustainability and make our country pollution-free and encourage our customers to
                            purchase
                            more plants to be one with nature.<br> We aim at building an excellent reputation and
                            growing our business by selling beautiful plants that you can decorate your home or
                            veranda
                            with.<br> Greenery is the best form of decoration and we thus have plenty of scented and
                            wonderful plants to choose from. </p>
                    </div>
                    <div class="alazea-progress-bar mb-50">
                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p><b>Best Service.</b></p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>

                        <!-- Single Progress Bar -->
                        <div class="single_progress_bar">
                            <p><b>Best Collection for Your Perfect Home!</b></p>
                            <div id="bar4" class="barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div>
                                <!-- <span class="fill" data-percentage="60" style="background: rgb(112, 199, 69);width: 356px;transition: width 1s ease-in-out 0s;"></span>  -->
                                <span class="fill" data-percentage="70"></span>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-12 col-lg-6">
                    <div class="alazea-benefits-area">
                        <div class="row">
                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="photos/plant.png" alt="">
                                    <h5>Quality Products</h5>
                                    <p>We Provide Best Quality Product at an Afforable Prices.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="photos/hand.png" alt="">
                                    <h5>Perfect Service</h5>
                                    <p>We try to provide the Bestest Services Possible for our Customers.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="photos/symbol.png" alt="">
                                    <h5>100% Natural</h5>
                                    <p>Safe and Natural products.</p>
                                </div>
                            </div>

                            <!-- Single Benefits Area -->
                            <div class="col-12 col-sm-6">
                                <div class="single-benefits-area">
                                    <img src="photos/enviroment.png" alt="">
                                    <h5>Environmentally friendly</h5>
                                    <p>All products are Environment Friendly and Safe.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="border-line"></div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->



    <!-- ##### Testimonial Area start here ##### -->
    <section class="cards-test bg-light section-padding-100-0">
        <div class="container">
            <div class="row mt-5">
                <div class="col-12">
                    <section class="cards padding-section">
                        <div class="section-heading text-center">
                            <h2>MEET OUR TEAM</h2>
                            <br>
                            <div class="card-deck">
                                <div class="card">
                                    <img class="card-img-top" src="photos/ruchika.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ms.Ruchika Wadkar</h5>
                                        <p class="card-text">Creative Head at FYTA</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="photos/shrusti11.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ms.Shrusti Suvarna</h5>
                                        <p class="card-text">Project Head at FYTA</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="photos/aashu.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Ms.Aastha Tiwari</h5>
                                        <p class="card-text">Marketing Head at FYTA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
    </section>
    </div>
    </div>
    </div>
    </section>

    <?php 
include 'webfooter.php'

?>

</body>

</html>