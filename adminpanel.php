<!Doctype HTML>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
	
		

<?php
session_start();
include 'db.php';
if (!isset($_SESSION['Username'])) {
  header('location:login.php');
}
?>

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



    <!-- add movies container -->
<center>
    <div class="col-md-6 " id="add-movies-container">
      <div class="p-5 bg-light">
        <div class="container">
          <!-- <h1 class="display-3">Add Furnitures</h1>
          </p> -->
        </div>
      </div>

      <form method="post" id="form" enctype="multipart/form-data" action="admin.php">
      
        <div class="mb-3">
    <div class="inputfield">
                                    <?php
                                    $con=mysqli_connect("localhost","root","","furniture");
                                    
                                    
                                    $sql=mysqli_query($con,"select * from tbl_brand WHERE status=1"); 
                                    ?>
                                    <label>Category Name</label><br>
                                    
                                    
                                    <select   name="brand_id" id="category" onchange="showResult(this.value)" class="form-control m-bot15" required >
                                    <option value=" ">--select--</option>
                                    <?php
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    
                                    ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[1] ?></option>
                                    
                                    <?php
                                    
                                    }
                                    ?>
                                    
                                    </select></div>
            <div class="mb-3">
    <div class="inputfield">
                                    <?php
                                    $con=mysqli_connect("localhost","root","","furniture");
                                    
                                    
                                    $sql=mysqli_query($con,"select * from tbl_subcategory WHERE status=1"); 
                                    ?>
                                    <label>SubCategory Name</label><br>
                                    
                                    
                                    <select   name="subcatid" id="category" onchange="showResult(this.value)" class="form-control m-bot15" required >
                                    <option value=" ">--select--</option>
                                    <?php
                                    while($row=mysqli_fetch_array($sql))
                                    {
                                    
                                    ?>
                                    <option value="<?php echo $row[0] ?>"> <?php echo $row[2] ?></option>
                                    
                                    <?php
                                    
                                    }
                                    ?>
                                  
                                    
                                    </select></div>
                                    <div class="mb-3">
        <h5>Product Name</h5>
        <label for="" class="form-label"></label>
        <input type="text" class="form-control" name="p_name" id="d" aria-describedby="helpId" autocomplete="off">
          <br>
        <span id="message4" style="color: red;"></span>

      </div>
      <div class="mb-3">
  <h5>Product Color</h5>
  <label for="" class="form-label"></label>
  <input type="text" class="form-control" name="p_color" id="d" aria-describedby="helpId" autocomplete="off" onblur="validateColor()">
  <div id="message5"></div>
</div>
          <!-- <input type="text" class="form-control" name="ak" id="c" aria-describedby="helpId"  autocomplete="off"> -->
          <!-- <div class="mb-3">
            <h5>Product Width</h5>
            <label for="" class="form-label"></label>
            <input type="text" class="form-control" name="siz" id="d" aria-describedby="helpId" autocomplete="off">
            <div id="message4"></div>
          </div> -->
          <div class="mb-3">
          <h5>Product Brand</h5>
          <label for="" class="form-label"></label>
          <input type="text" class="form-control" name="p_brand" id="a" aria-describedby="helpId" autocomplete="off"required onblur="validateBrand()">
          <div id="message15"></div>
         </div>

         <div class="mb-3">
  <h5>Product Price</h5>
  <label for="" class="form-label"></label>
  <input type="text" class="form-control" name="p_price" id="a" aria-describedby="helpId" autocomplete="off" required onblur="validatePrice()">
          <!-- <div id="message15"></div> -->
  <div id="message8"></div>
</div>
          <div class="mb-3">
            <h5>Product image</h5>
            <label for="" class="form-label"></label>
            <input type="file" class="form-control" name="img" id="e" aria-describedby="helpId" autocomplete="off">
            <div id="message5"></div>
          </div>
          <br>
          <div class="mb-3">
          <input type="submit" name="submit" class="btn btn-primary" id="add-btn"></button>
          <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
        </div>
      </form>
    </div>
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
<script>
      function validateProductName() {
        const productNameInput = document.getElementById('d');
        const productName = productNameInput.value.trim();

        if (productName === '') {
          document.getElementById('message4').innerHTML = 'Product name is required.';
          productNameInput.classList.add('is-invalid');
          return false;
        } else {
          document.getElementById('message4').innerHTML = '';
          productNameInput.classList.remove('is-invalid');
          return true;
        }
      }
      document.getElementById('d').addEventListener('blur', validateProductName);

document.querySelector('form').addEventListener('submit', function(event) {
  if (!validateProductName()) {
    event.preventDefault();
  }
});
function validateBrand() {
  var brandInput = document.getElementById("a");
  var brandValue = brandInput.value.trim();

  var message = document.getElementById("message15");

  if (brandValue == "") {
    message.innerHTML = "Brand name is required";
    message.style.color = "red";
    brandInput.style.borderColor = "red";
  } else if (brandValue.length < 3) {
    message.innerHTML = "Brand name must be at least 3 characters";
    message.style.color = "red";
    brandInput.style.borderColor = "red";
  } else {
    message.innerHTML = "";
    brandInput.style.borderColor = "green";
  }
}

</script>
<script>
function validateColor() {
  var input = document.getElementById("d");
  var message = document.getElementById("message5");
  
  // Check if input value is empty
  if (input.value.trim() === "") {
    message.innerHTML = "Please enter a color.";
    message.style.color = "red";
    return;
  }
  
  // Check if input value contains only letters
  var letters = /^[A-Za-z]+$/;
  if (!input.value.match(letters)) {
    message.innerHTML = "Color can only contain letters.";
    message.style.color = "red";
    return;
  }
  
  // Validation successful
  message.innerHTML = "";
}
</script>
<script>
function validatePrice() {
  var price = document.getElementById("a").value;
  var message = document.getElementById("message8");
  
  if (price === "") {
    message.innerHTML = "Please enter a price";
  } else if (price < 0) {
    message.innerHTML = "Price cannot be negative";
  }  
}
</script>
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
