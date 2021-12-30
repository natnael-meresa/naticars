<?php 

 
$id = strval($_GET["q"]);
 $conn = mysqli_connect('localhost','root','','carsell');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "DELETE FROM car WHERE id = '$id'";
mysqli_query($conn ,$query);
 ?>