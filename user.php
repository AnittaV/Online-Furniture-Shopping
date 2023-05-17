<html><head>
    <style>
        table, th, td {
  border: 1px solid black;
}
</style>
</head>
</html>
<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "furniture";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT * FROM tbl_addprod";
$result = mysqli_query($conn, $sql);

// Display the data in an HTML table
echo "<table>";
echo "<tr><th>subcatid</th><th>prdnm</th><th>prdpr</th><th>color</th><th>brand</th><th>image</th><th>brand_id</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row["subcatid"] . "</td>";
    echo "<td>" . $row["prdnm"] . "</td>";
    echo "<td>" . $row["prdpr"] . "</td>";
    echo "<td>" . $row["color"] . "</td>";
    echo "<td>" . $row["brand"] . "</td>";
    echo "<td>" . $row["image"] . "</td>";
    echo "<td>" . $row["brand_id"] . "</td>";
    
    echo "</tr>";
}

echo "</table>";

// Close the database connection
mysqli_close($conn);
?>