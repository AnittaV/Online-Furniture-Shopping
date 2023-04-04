<?php
$con = mysqli_connect("localhost", "root", "", "furniture");
$prdid = $_POST['prdid'];
$mysql = "DELETE FROM `tbl_addprod` WHERE `prdid`='$prdid'";
mysqli_query($con, $mysql);
header('Location: view_product.php');
?>
