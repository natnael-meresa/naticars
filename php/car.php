
<?php
include('server.php');
$conn = mysqli_connect('localhost','root','','carsell');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

		if(isset($_POST['entercar'])){
	$brand = mysqli_real_escape_string($conn,$_POST['brand']);
	$color = mysqli_real_escape_string($conn,$_POST['color']);
	$condation = mysqli_real_escape_string($conn,$_POST['condation']);
	$enginesize = mysqli_real_escape_string($conn,$_POST['enginesize']);
	$whatdo = mysqli_real_escape_string($conn,$_POST['whatdo']);
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


	$price= mysqli_real_escape_string($conn,$_POST['price']);
	$day = mysqli_real_escape_string($conn,$_POST['day']);
	$username = $_SESSION['username'];
	$sql= "insert into car(brand,color,condation,enginesize,whatdo,image,price,day,username) values ('$brand','$color','$condation','$enginesize','$whatdo','$file','$price','$day','$username')";
	mysqli_query($conn,$sql);
	header('location:../html/home.html');
}
}
 ?>