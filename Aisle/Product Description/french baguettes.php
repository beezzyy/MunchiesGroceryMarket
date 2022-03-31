<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" href="../../CSS/style aisle.css"/> -->
    <link rel="stylesheet" type="text/css" href="../../CSS/Product Description.css" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>French Baguette</title>
    <link rel="icon" href="../../Munchies.jpg">
    <script src="https://kit.fontawesome.com/bfd858aa6d.js" crossorigin="anonymous"></script>

</head>



<body onload="onLoad()">


    <script type="text/javascript" src="code.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container-fluid nav">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <a class="navbar-brand" href="../../index.php">
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
                        <a class="nav-link" href="../../index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <button class="dropbtn">
                            Aisle
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="../FruitsAndVegetables.php">Fruits and vegetables</a>
                            <a class="dropdown-item" href="../Beverages.php">Beverages</a>
                            <a class="dropdown-item" href="../Bakery.php">Bakery</a>
                            <a class="dropdown-item" href="../Frozen.php">Frozen</a>
                            <a class="dropdown-item" href="../Butchery.php">Butchery</a>
                            <a class="dropdown-item" href="../Seafood.php">Seafood</a>
                            <a class="dropdown-item" href="../Snacks.php">Snacks</a>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="../login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../p7-p12/backstore/backStore.php">Back Store Page</a>
                    </li>
                </ul>
            </div>
            <div>
                <?php

                if (isset($_SESSION['first'])) {
                    echo "<span style=\"color:white\">Hello " . $_SESSION['first'] . " </span>";
                    echo "<a  style=\"color:white\" href=\"../../php functions/signOut.php\">Sign Out</a>";
                } else {
                    echo "<span style=\"color:white\">Hello Guest User</span>";
                }

                ?>
                <a class="cartIcon" href="../../Shopping%20Cart.php"><img src="../../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
            </div>
        </nav>
    </div>


    <div class="div1">
        <a class="none" href="../Bakery.php">
            <h1 class="h1">BAKERY</h1>
        </a>
    </div>


    <!-- MAIN-CONTNET -->
    <div class="container-fluid">
        <div class="row">
            <div class="container" style="margin-top:30px">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <img src="https://images.unsplash.com/photo-1597079910443-60c43fc4f729?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" alt="" class="img1" style="width: 100%;">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <h4 class="product-name">French Baguette</h4>
                        <br>

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="more-description">More Description <i class="fas fa-arrow-down"></i></a>

                            </h4>
                        </div>

                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>A baguette is a long loaf of bread closely connected to France. It is essentially a lean, yeast-leavened bakery product made with four basic ingredients. Flour, Water, Yeast and Salt.</p>
                            </div>
                        </div>

                        <p class="under-product-name"></p>
                        <br>
                        <h5><span class="third">$1.00/unit </span>
                            <br><span class="fourth">(1 French Baguette)</span>
                        </h5>
                        <br>
                        <br>
                        Quantity:
                        <div class="box">
                            <input type="number" value="1" min="1">
                        </div>
                        <br>
                        <button type="button" class="btn btn-dark btn1">
                            <i class="fas fa-shopping-cart fas"></i> Add to Shopping Cart
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/p3.js"></script>
</body>

</html>