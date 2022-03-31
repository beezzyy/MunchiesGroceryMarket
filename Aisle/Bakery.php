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
  <title>BAKERY</title>
  <link rel="icon" href="../Munchies.jpg">
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
    <h1 class="h1">BAKERY</h1>
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
      <form action="Bakery.php" method="get">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/french baguettes.php"><img class="item-pic" src="https://images.unsplash.com/photo-1597079910443-60c43fc4f729?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/french baguettes.php" style="color:black">Baguettes</h5></a>
                <p class="card-text ">1 French Baguette <br> <br> <br><span>$</span><span class="cost">1.00</span>
                <span class="unit">/ Baguette</span> <br> <span class="gram">$1.00 / Loaf</span>
                </p>
                <button class="btn btn-dark">ADD TO CART</button>

              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/rye bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1472&q=80.jpg" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/rye bread.php" style="color:black">Rye Bread</h5></a>
                <p class="card-text ">1 Loaf of Rye Bread<br> <br> <br><span>$</span><span class="cost">4.55</span>
                  <span class="unit">/ Loaf of Rye Bread</span> <br> <span class="gram">$1.00 / Baguette</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Rye Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/sourdough bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1585478259715-876a6a81fc08?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/sourdough bread.php" style="color:black">Sourdough Bread</h5></a>
                <p class="card-text ">1 Loaf of Sourdough Bread<br> <br> <br> <span>$</span><span class="cost">6.96</span><span>/ Loaf of Sourdough Bread</span>
                  <br> <span class="gram">$6.96</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Sourdough Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/challah bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1609970957077-6baa39b4a749?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1470&q=80" class="card-img-top apples" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/challah bread.php" style="color:black">Challah Bread</h5></a>
                <p class="card-text ">1 Loaf of Challah Bread <br> <br> <br><span>$</span><span class="cost">3.50</span>
                  <span class="unit">/ Loaf of Challah Bread</span> <br> <span class="gram">$3.50 / Loaf</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Challah Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/bagels.php"><img class="item-pic" src="https://images.unsplash.com/photo-1585445490387-f47934b73b54?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/bagels.php" style="color:black">Bagels</h5></a>
                <p class="card-text ">1 Bagel<br> <br> <br><span>$</span><span class="cost">1.55</span>
                  <span class="unit">/ Bagel</span> <br> <span class="gram">$1.55 / Bagel</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Bagel" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/whole wheat bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1565181917578-a87c12e04ff7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1536&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/whole wheat bread.php" style="color:black">Whole Wheat Bread</h5></a>
                <p class="card-text ">1 Loaf of Whole Wheat Bread<br> <br> <br><span>$</span><span class="cost">3.25</span>
                  <span class="unit">/ Loaf of Whole Wheat Bread</span> <br> <span class="gram">$3.25 / Loaf</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Whole Wheat Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/brioche bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1620921568790-c1cf8984624c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1074&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body" id="bb">
                <h5 class="card-title"><a href="Product Description/brioche bread.php" style="color:black">Brioche Bread</h5></a>
                <p class="card-text ">1 Loaf of Brioche Bread<br> <br> <br><span>$</span><span class="cost">3.75</span>
                  <span class="unit">/ Loaf of Brioche Bread</span> <br> <span class="gram">$3.75 / Loaf</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Brioche Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 p-2">
            <div class="card">
              <a href="Product Description/pita bread.php"><img class="item-pic" src="https://images.unsplash.com/photo-1583057341912-a0df64b8da4d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1074&q=80" class="card-img-top" alt="..."></a>
              <div class="card-body">
                <h5 class="card-title"><a href="Product Description/pita bread.php" style="color:black">Pita Bread</h5></a>
                <p class="card-text ">1 Slice of Pita Bread<br> <br> <br><span>$</span><span class="cost">0.89</span>
                  <span class="unit">/ Slice of Pita Bread</span> <br> <span class="gram">$0.89 / Unit</span>
                </p>
                <button class="btn btn-dark" name="productName" value="Pita Bread" type="submit">ADD TO CART</button>
              </div>
            </div>
          </div>

        </div>
      </div>
      </form>
    </div>
  </div>

</body>
<?php
if(isset($_GET['productName'])){
  addToCart();
  
}

?>

</html>