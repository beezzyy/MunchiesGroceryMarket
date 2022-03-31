<?php
session_start();
ob_start();
include("../php functions/cart.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Beverages</title>
    <link rel="icon" href="../Munchies.jpg">
    <!-- <link rel="icon" href="../../Metadata/icon.svg"> -->
    <style>
        .list-group {
            margin-bottom: 20%;
        }

        .btn {
            width: 10rem;
            text-align: center;
            font-size: 0.9rem;
            position: relative;
            left: 0.2px;
            margin-top: 3rem;
        }
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container-fluid pb-5">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="../index.php">
                <img src="https://cdn.dribbble.com/users/6509578/screenshots/15442655/media/25c9f235821b698efae9b157e88dc827.jpg" height="50" width="80" />
                <p class="logo" style="display: inline">
                    <span class="logo-sub">MUNCHIES</span>Market
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <button class="dropbtn">
                            Aisle
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="FruitsAndVegetables.php">Fruits and vegetables</a>
                            <a class="dropdown-item" href="Beverages.php">Beverages</a>
                            <a class="dropdown-item" href="Bakery.php">Bakery</a>
                            <a class="dropdown-item" href="Frozen.php">Frozen</a>
                            <a class="dropdown-item" href="Butchery.php">Butchery</a>
                            <a class="dropdown-item" href="Seafood.php">Seafood</a>
                            <a class="dropdown-item" href="Snacks.php">Snacks</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../p7-p12/backstore/backStore.php">Back Store Page</a>

                    </li>
                </ul>
            </div>
            <div>
                <?php

                if (isset($_SESSION['first'])) {
                    echo "<span style=\"color:white\">Hello " . $_SESSION['first'] . " </span>";
                    echo "<a  style=\"color:white\" href=\"../php functions/signOut.php\"> | Sign Out</a>";
                } else {
                    echo "<span style=\"color:white\">Hello Guest User</span>";
                }

                ?>
                <a class="cartIcon" href="../Shopping%20Cart.php"><img src="../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
            </div>
        </nav>
    </div>

    <!-- PRODUCT DESCRIPTION -->
    <div class="div1">
        <h1 class="h1">SEAFOOD</h1>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="sidebar col-md-2">
                <ul class="list-group list-group-flush">
                    <li class="categories">CATEGORIES</li>
                    <li class="hr">
                        <hr>
                    </li>
                    <a href="FruitsAndVegetables.php">
                        <li class="list-group-item">Fruits and Vegetables</li>
                    </a>
                    <a href="Beverages.php">
                        <li class="list-group-item">Beverages</li>
                    </a>
                    <a href="Bakery.php">
                        <li class="list-group-item">Bakery</li>
                    </a>
                    <a href="Frozen.php">
                        <li class="list-group-item">Frozen</li>
                    </a>
                    <a href="Butchery.php">
                        <li class="list-group-item">Butchery</li>
                    </a>
                    <a href="Seafood.php">
                        <li class="list-group-item">Seafood</li>
                    </a>
                    <a href="Snacks.php">
                        <li class="list-group-item">Snacks</li>
                    </a>

                </ul>

            </div>

            <div class="main-content col-md-10">
            <form action="Seafood.php" method="get">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Crab.php"><img class="item-pic" src="https://www.marchespublics-mtl.com/wp-content/uploads/MPM_Poissons_Crabe.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Crab.php" style="color:black">Fresh Crab</h5></a>
                                <p class="card-text ">1 Fresh Crab (approx. 2lb) <br> <br> <br> approx. <span class="cost">$30.00</span>
                                    / lb <br> <span class="gram">$30.00 / 2lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Fresh Crab" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Lobster.php"><img class="item-pic" src="https://www.washingtonpost.com/rf/image_982w/2010-2019/WashingtonPost/2020/08/13/Food/Images/v-howto-lobster_029.JPG" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Lobster.php" style="color:black">Lobster</h5></a>
                                <p class="card-text ">1 Lobster (approx. 1lb) <br> <br> <br> approx. <span class="cost">$29.99</span>
                                    / lb <br> <span class="gram">$29.99 / 1lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Lobster" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Shrimp.php"><img class="item-pic" src="https://www.sweetandsavorybyshinee.com/wp-content/uploads/2021/05/Shrimp-2-1.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Shrimp.php" style="color:black">Shrimp</h5></a>
                                <p class="card-text "> 10 Shrimp (approx. 1lb)<br> <br> <br> approx. <span class="cost">$25.99</span>/
                                    lb <br> <span class="gram">$25.99 / 1lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Shrimp" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Oysters.php"><img class="item-pic" src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fblogs-images.forbes.com%2Fcourtneyschiessl%2Ffiles%2F2018%2F05%2FOysters_int.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Oysters.php" style="color:black">Oysters</h5></a>
                                <p class="card-text ">12 Oysters (approx. 6g) <br> <br> <br> approx. <span class="cost">$45.50</span>
                                    / 6g <br> <span class="gram">$45.50 / 6g</span></p>
                                    <button class="btn btn-dark" name="productName" value="Oysters" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/WildSalmon.php"><img class="item-pic" src="https://www.skinnytaste.com/wp-content/uploads/2018/12/Baked-Salmon-1.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/WildSalmon.php" style="color:black">Wild Salmon</h5></a>
                                <p class="card-text ">1 Wild Salmon (approx. 4lb) <br> <br> <br> approx. <span class="cost">$12.00</span>
                                    / lb <br> <span class="gram">$12.00 / lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Wild Salmon" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/TunaSteak.php"><img class="item-pic" src="https://theheritagecook.com/wp-content/uploads/2012/01/Raw-Ahi-Tuna-Steaks2-iStock.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/TunaSteak.php" style="color:black">Tuna Steak</h5></a>
                                <p class="card-text ">1 Tuna Steak (approx. 0.8lb) <br> <br> <br> approx. <span class="cost">$30.00</span>
                                    / lb <br> <span class="gram">$24.00 / 0.8lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Tuna Steak" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Calamari.php"><img class="item-pic" src="https://www.thespruceeats.com/thmb/3IAKAM_nPxKNRJfrdNsVdktNeH4=/960x0/filters:no_upscale():max_bytes(150000):strip_icc()/calamari_1806999-2-e8a531d5915e49719d5b049fd6fa00a1.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Calamari.php" style="color:black">Calamari</h5></a>
                                <p class="card-text ">1 Calamari (approx. 5lb) <br> <br> <br> approx. <span class="cost">$52.99</span>
                                    / 5lb <br> <span class="gram">$10.60 / 5lb</span></p>
                                    <button class="btn btn-dark" name="productName" value="Calamari" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
                        <div class="card">
                            <a href="Product Description/Caviar.php"><img class="item-pic" src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Caviar_spoons.jpg" class="card-img-top apples" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><a href="Product Description/Caviar.php" style="color:black">Caviar</h5></a>
                                <p class="card-text ">1 Jar Caviar (approx. 30g) <br> <br> <br> approx. <span class="cost">$75.99</span>
                                    / jar <br> <span class="gram">$75.99 / 30g</span></p>
                                    <button class="btn btn-dark" name="productName" value="Caviar" type="submit">ADD TO CART</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>
    </div>
</body><?php
if(isset($_GET['productName'])){
  addToCart();
  
 
}

?>