<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
<head>
    <title>Update</title>
    <!-- CSS only -->
    <!-- CSS only -->
    <style>
        .product_img {
            width: 20%;
            height: 20%;
        }

        body {
            margin-left: 3%;
            margin-right: 3%;
        }
    </style>
	</head>


	<body>
		
	<div id="mySidenav" class="sidenav">
	<div class="logo">
		<img src="../logo.jpg" alt="logo image" style=width:221px; height:98px; >
	</div>
	  <a href="#" class="icon-a"><i class="fa fa-dashboard icons"></i>   Dashboard</a>
	  <a href="adminpanel.php"class="icon-a"><i class="fa fa-users icons"></i>  Add Product</a>
	  <a href="view_product.php"class="icon-a"><i class="fa fa-list icons"></i>   View Product</a>
	  <a href="category.php"class="icon-a"><i class="fa fa-tasks icons"></i>   Category</a>
    <a href="subcategory.php"class="icon-a"><i class="fa fa-tasks icons"></i>   subcategory</a>
    <a href="adminpanel.php"class="icon-a"><i class="fa fa-users icons"></i>  Logout</a>
	  <!-- <a href="#"class="icon-a"><i class="fa fa-user icons"></i>   Service</a>
	  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i>   Dealers</a> -->

	</div>
	<div id="main">

		<div class="head">
			<div class="col-div-6">
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >☰ Dashboard</span>
	<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >☰ Dashboard</span>
	
		


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
  <script src="js/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Admin panel</title>
  <link rel="stylesheet" href="css/admin.css">
  

</head>



<h4 style="text-align:center;">View product</h4>
    <form action="#" method="POST">
        <table class="table table-dark table-striped;" border="1" width="100%" height="100%" >
            <tr>
                <!-- <th>Product Id</th> -->
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Color</th>
                <th>Product Brand</th>
                <th>Product Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
            $con = mysqli_connect("localhost", "root", "", "furniture");
            $mysql = "SELECT * FROM `tbl_addprod` ";
            $result = mysqli_query($con, $mysql);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?= $row['prdnm'] ?></td>
                    <td><?= $row['prdpr'] ?></td>
                    <td><?= $row['color'] ?></td>
                    <td><?= $row['brand'] ?></td>
                 <td><img class="product_img" src="../img/<?= $row['image'] ?>"></td> 
                  
                    <td><a href="update_details.php?id=<?= $row['prdid'] ?>" class="btn btn-success">Edit</a></td>
                </tr>

            <?php
            }
            ?>
        </table>
    </form>
    </div>
<!-- </cenetr> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="admin.js"></script> -->
</body>
</tr>
        </table>
      </div>
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <script>
  $("#Product").click(function() {
    window.location.href = "edit_details.php";
  })
  $("#home-page").click(function() {
    window.location.href = "index.php";
  })
  $("#logout").click(function() {
    window.location.href = "logout.php";
  })
  $("#View").click(function() {
    window.location.href = "view_user.php";
  })
</script> -->

</html>
