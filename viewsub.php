<?php
include "db.php";
$n=$_GET['id'];

$sql = "SELECT a.*,b.*,c.* FROM `tbl_addprod` as a INNER JOIN tbl_brand as b INNER JOIN tbl_subcategory as c ON a.brand_id = $n and a.subcatid=c.subcatid and a.brand_id=b.brand_id";
$result = mysqli_query($con,$sql);
?>

<html>
    <head>

    </head>
    <body>
        <table border="1" width="50%" height="50%">
            <tr>
                <!-- <th>product name</th> -->
                <th>Sub Category</th>
                <th>Color</th>
                <th>Brand</th>
                <th>Image</th>
            </tr>
            <?php 
            while($row=mysqli_fetch_array($result)){
            ?>
<tr>
    <!-- <td></td> -->
    <td><?php echo $row['subcatname']; ?></td>
    <td><?php echo $row['color']; ?></td>
    <td><?php echo $row['brand']; ?></td>
    <td><img src="<?php echo $image_src; ?>" alt="brand" style="width:100%">
                        <div class="container"style="width:80%"></td>
</tr>
            <?php } ?>
        </table>
    </body>
</html>