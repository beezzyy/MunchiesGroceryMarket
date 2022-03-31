<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../CSS/backStore.css">
  <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />
  <link rel="stylesheet" href="../CSS/bootstrap.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css">
  <link rel="stylesheet" href="../CSS/bootstrap.min.css.map">
  <script src="../js/bootstrap.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <title>Back Store - MUNCHIES Market</title>

</head>

<body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
  crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
  crossorigin="anonymous"></script>

  <div class="container-fluid pb-5">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
      <a class="navbar-brand" href="../../index.php">
        <img
          src="https://cdn.dribbble.com/users/6509578/screenshots/15442655/media/25c9f235821b698efae9b157e88dc827.jpg"
          height="50" width="80" />
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
              <a class="dropdown-item" href="../../Aisle/FruitsAndVegetables.php">Fruits and vegetables</a>
              <a class="dropdown-item" href="../../Aisle/Beverages.php">Beverages</a>
              <a class="dropdown-item" href="../../Aisle/Bakery.php">Bakery</a>
              <a class="dropdown-item" href="../../Aisle/Frozen.php">Frozen</a>
              <a class="dropdown-item" href="../../Aisle/Butchery.php">Butchery</a>
              <a class="dropdown-item" href="../../Aisle/Seafood.php">Seafood</a>
              <a class="dropdown-item" href="../../Aisle/Snacks.php">Snacks</a>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="../../Aisle/login.php">Login</a>
          </li>
          <li class="nav-item dropdown">
            <button class="dropbtn">
              BackStore
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="Orders.php">Orders</a>
              <a class="dropdown-item" href="Users.php">Users</a>
              <a class="dropdown-item" href="backStore.php">Products</a>
            </div>
          </li>
        </ul>
      </div>
      <div>
        <a class = "cartIcon" href="../../Shopping%20Cart.php"><img src="../../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"  ></a>
      </div>
    </nav>
  </div>
  <br>
  <br>

  <div class="container">

          <form method="post" action="add.php">

            <div class="form-group">
                <label for="exampleInputEmail1">Order No</label>
                <input type="text" class="form-control" name="id" aria-describedby="emailHelp" placeholder="Enter Order No">
              </div>

            <div class="form-group">
              <label for="exampleInputEmail1">First Name</label>
              <input type="text" class="form-control" name="FN" aria-describedby="emailHelp" placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" class="form-control" name="LN" aria-describedby="emailHelp" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" name="EM" aria-describedby="emailHelp" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Contact No.</label>
                <input type="text" class="form-control" name="PH" aria-describedby="emailHelp" placeholder="Enter Phone">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="text" class="form-control" name="AD" aria-describedby="emailHelp" placeholder="Enter Address">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Item</label>
                <input type="text" class="form-control" name="IT" aria-describedby="emailHelp" placeholder="Enter Item">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="text" class="form-control" name="Q" aria-describedby="emailHelp" placeholder="Enter Quantity">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Bill</label>
                <input type="text" class="form-control" name="BL" aria-describedby="emailHelp" placeholder="Enter Bill">
              </div>
            <button type="submit" name="add" class="btn btn-primary">Save</button>
          </form>
        
      
  </div>
</body>

</html>