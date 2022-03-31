<?php
include "connectDB.php";
$id = $_GET['updateId'];
if (isset($_POST['submit'])) {
    $image = $_POST['image_path'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET image='$image', title='$title', description='$description', quantity='$quantity', price= '$price' WHERE id='$id'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header('location: backStore.php');
    } else {
        die(mysqli_error($connection));
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="../CSS/style aisle.css" />
    <link rel="stylesheet" href="../CSS/bootstrap.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css.map">
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../CSS/backStore.css">
    <title>Back Store - MUNCHIES Market</title>

</head>

<body>

    <div class="container-fluid pb-5">
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
                <a class="cartIcon" href="../../Shopping%20Cart.php"><img src="../../cartfinal-removebg-preview.png" alt="Cart" style="width: 40px; height:40px;"></a>
            </div>
        </nav>
    </div>
    <br>
    <br>


    <div class="container">
        <form method="POST">
            <?php
            $sql = "Select * from products where id='$id' LIMIT 1";
            $result = mysqli_query($connection, $sql);
            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $temp_image = $row['image'];
                $temp_title = $row['title'];
                $temp_description = $row['description'];
                $temp_quantity = $row['quantity'];
                $temp_price = $row['price'];
                echo '
        <div class="form-group">
        <label for="exampleInputEmail1">Upload Image</label>
        <input type="file" class="form-control" name="image_path" value=' . $temp_image . '>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Product Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Title" name="title" value=' . $temp_title . '>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Description</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Description" name="description" value=' . '"' . $temp_description . '"' . '>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Quantity</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Quantity" name="quantity" value=' . $temp_quantity . '>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price Per Unit</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Price" name="price" value=' . $temp_price . '>
      </div>
        ';
            }
            ?>


            <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>


    </div>

</body>

</html>