
<!DOCTYPE html>
<html lang="en">

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
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- <script>
    $(".disable_btn").show();
    $(".enable_btn").hide();
    $(".disable_btn").click(function() {
        // window.location.href = "inactive.php";
        $(".disable_btn").hide();
        $(".enable_btn").show();
    })
    $(".enable_btn").click(function() {
        // window.location.href = "inactive.php";
        $(".disable_btn").show();
        $(".enable_btn").hide();
    })
</script> -->

</html>