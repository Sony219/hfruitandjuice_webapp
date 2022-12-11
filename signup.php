<?php
     $servername = "localhost";
     $username = "Fruit";
     $password = "Dany12345678@";
     $dbname = "Sosofruits";
     $tblname ="signup";

     //create connection
$conn = mysqli_connect('$servername', '$username', '$password', '$dbname', '$tblname' );
//check connection

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO users (FullName, Email, Phone, Address, Password) VALUES('sonel dorvil, 'dorvilsonelp@gmail.com', '2029120945', '12345678', '348 NE 117 st')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";

} else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
}
 mysqli_close($conn);
?>





?>
