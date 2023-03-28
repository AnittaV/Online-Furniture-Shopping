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
include "db.php";
$sql = "SELECT * FROM `tbl_brand` WHERE STATUS = 1";
$result = mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>

<style>
    
/* .hsptl{
    width: 98%;
    height:auto;
    background-color:#320d3e;
    border-radius:20px;
    display:flex;
    flex-direction:row;
    justify-content:space-around;
    align-items:center;
    margin-top:20px;
    margin-bottom:30px;
    color:white;
    padding: 20px;

}
.hsptl img{
    width:90%;
    height:auto;
    margin:10px;
    border-radius:10px;
}
.hsptl h3{
    margin:10px;
}
.hsptl p{
    margin:15px;
} */

.row1 {
    display: -ms-flexbox;
    display: flex;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
}

  .column {
    float: left;
    width: 24.3%;
    height: 250px;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
    margin: 8px;
    height: 250px;
  }
  .container {
    padding: 0 16px;
    height: 250px;
  
  }
  .price,.qty {
    /* min-height: 200px; */
    margin-bottom: 10px;
  }
  .card button{margin-bottom: 0px;}
  .card h2{margin-top:10px;margin-bottom: 10px;text-align: center;}
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 10px;
    color: white;
    background-color: #497df7;
    text-align: center;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
  }
  
  .button:hover {
    background-color: #555;
  }

  .card img {
    height:200px;
  }


</style>




<body>
<div class="row1" >
                <?php while($row = $result->fetch_assoc()) { 
                    $brand = $row['brand'];
                    // $Description = $row['Description'];
                    $image = $row['image'];
                    $image_src = "admin/photos/".$image;
                    // $url= ($row['0'])
                ?>
                <div class="column"><center>
                <a href="booking.php?id=<?php echo $row['brand_id']; ?>">
                <div class="card ">
                    
                        <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                        <div class="container"style="width:80%">
                          <h2><?php echo $brand;?></h2>
                          
                        </div>
                    
                    </div>
                    </center>
                </div>
                </a>
                 <?php } ?>
            </div>
