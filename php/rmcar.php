<?php 

 $id =strval($_POST['q']);
 $conn = mysqli_connect('localhost','root','','carsell');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$query = "DELETE FROM car WHERE id = '$id'";
if(mysqli_query($conn ,$query)){
				echo $id;
				echo "Suscs fully Removed";
			}else {
				echo "not delted";
			}
 ?>