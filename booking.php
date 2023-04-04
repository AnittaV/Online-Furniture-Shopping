<?php
session_start();
include "db.php";
$sql = "SELECT * FROM `tbl_addprod` WHERE STATUS = 1 ";
$result = mysqli_query($con,$sql);

// if(isset($_GET['booking_filter_btn'])){
//   $option= $_GET['option_filter'];
//   $sql = "SELECT * FROM `tbl_addrooms` WHERE STATUS = 1 AND multipleData LIKE '%$option%'";
//   $result = mysqli_query($conn,$sql);


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
    <title>Document</title>

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
    height: auto;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }
  .container {
    padding: 0 16px;
    min-height: 150px;
  
  }
  .price,.qty {
    /* min-height: 200px; */
    margin-bottom: 10px;
  }
  .card button{margin-bottom: 20px;}
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
    padding: 8px;
    color: white;
    background-color: #497df7;
    text-align: center;
    cursor: pointer;
    width: 100%;
    margin-bottom: 20px;
  }
  
  .button:hover {
    background-color: #555;
  }

  .card img {
    max-height: 250px;
  }


</style>

</head>



<body>
<?php 
if(isset($_GET['id'])){
  $typeid = $_GET['id'];
}
else{
  $typeid = "ALL";

}
 
?>
 
<div class="row1" >
                <?php while($row = $result->fetch_assoc()) { 
                  
                    $brand = $row['brand_id'];
                    if($typeid == $brand)
                    {
                    $prdid = $row['prdid'];
                   
                    // $choose_room = $row['choose_room'];
                    // $price = $row['price'];
                    // $multipleData = $row['multipleData'];
                    $image_src = "./admin/photos1/".$choose_room;
                    // $url= ($row['0'])
                ?>
                <div class="column"><center>
                    <a href="">
                <div class="card ">
                    
                        <img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                        <div class="container">
                         
                        
                          <h5>Services:<?php echo $brand;?></h5>
                     
                          <h4>₹ <?php echo $price;?></h4>
                          <!-- <?php echo "<td><button type='button' class='btn btn-success'>Book Now</button></td>";?></h2> -->
                          
                          <a href="Bookingform.php?prdid=<?php echo $prdid; ?>" class='btn btn-success'>Reserve</a>  
                            
                          

                         
                        </div>
                    
                    </div>
                    </center>
                </div>
                </a>
                 <?php } 
                 }
                 ?>
            </div>
                </div>
                <p class="col-md-6 text-right social">
            <a href="#"><span class="fa fa-tripadvisor"></span></a>
            <a href="#"><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span>