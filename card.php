<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
    <meta charset="utf-8">
     <title>iDESIGN - Interior Design HTML Template</title> 
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <!-- <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a> -->
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <!-- <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container position-relative" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-secondary navbar-dark py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <!-- <h1 class="m-0 display-5 text-white"><span class="text-primary">i</span>DESIGN</h1> -->
                    <h1 class="m-0 display-5 text-white"><span class="text-primary"></span>iDESIGN FURNITURE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a> 
                        <a href="service.html" class="nav-item nav-link">Service</a>
                        <a href="project.html" class="nav-item nav-link">Project</a>
                        <a href="reg.php" class="nav-item nav-link">Booking</a>
                        <a href="category.php" class="nav-item nav-link">Furnitures</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                        
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a> -->
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <!-- <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>






<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "furniture";
$con = new mysqli($servername, $username, $password, $database);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Query to fetch data from the database
$sql = "SELECT * FROM tbl_addprod";
$result = $con->query($sql);
?>

<style>
   .row1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 auto;
    max-width: 1200px;
}

.column {
    flex-basis: calc(33.33% - 20px);
    margin-bottom: 30px;
}

.card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    overflow: hidden;
}

.card img {
    display: block;
    width: 50%;
    height: auto;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-description {
    font-size: 14px;
    margin-bottom: 10px;
}

.card-price {
    font-size: 16px;
    font-weight: bold;
}

.card-button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.card-button:hover {
    background-color: #3e8e41;
}


</style>
<style>
    .column {
    width: 150px; /* or any other width that suits your needs */
    margin-bottom: 30px;
}
    </style>

<div class="row1">
    
        
       
        <?php while($row = $result->fetch_assoc()) { 
            // while($row = $result->fetch_assoc()) { 
                $prdnm=$row['prdnm'];
                $prdpr=$row['prdpr'];
                $image = $row['image'];
                $image_src = "./admin/img/".$image;
    ?>
    <div class="column">
        <div class="card" style="height: 422px;">
            <img src="<?php echo $image_src; ?>" alt="product image"style="width:100%">
            
            <div class="container"style="width:80%">
             <h3><?php echo $prdnm; ?></h3>
             <h3>₹   <?php echo $prdpr; ?></h3>
                <!-- <p class="card-description"><?php echo $row['description']; ?></p>
                <p class="card-price">$<?php echo $row['price']; ?></p> --> 
                <button class="card-button">Add to Cart</button>
            </div>
        </div>
    </div>
    <?php 
            } 
        
    ?>
</div>
