<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sosofruits";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT product_Id,product_name FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "product_Id: " . $row["product_Id"]. " - Name: " . $row["product_name"]. " " . $row["Product_name"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>