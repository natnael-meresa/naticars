<?php

$conn = mysqli_connect('localhost','root','','carsell');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {

	if(isset($_POST['entercar'])){
$brand = mysqli_real_escape_string($conn,$_POST['brand']);
echo $brand;
$model = mysqli_real_escape_string($conn,$_POST['model']);
echo $model;
$bodytype = mysqli_real_escape_string($conn,$_POST['bodytype']);
echo $bodytype;
$color = mysqli_real_escape_string($conn,$_POST['color']);
echo $color;
$condation = mysqli_real_escape_string($conn,$_POST['condation']);
echo $condation;
$yearmake = mysqli_real_escape_string($conn,$_POST['yearmake']);
echo $yearmake;
$transmisson = mysqli_real_escape_string($conn,$_POST['transmisson']);
echo $transmisson;
$enginesize = mysqli_real_escape_string($conn,$_POST['enginesize']);
echo $enginesize;
$enginetype = mysqli_real_escape_string($conn,$_POST['enginetype']);
echo $enginetype;
$location = mysqli_real_escape_string($conn,$_POST['location']);
echo $location;
$whatdo = mysqli_real_escape_string($conn,$_POST['whatdo']);
echo $whatdo;
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
echo $amount;
$image = addslashes (file_get_contents($_FILES['image']['tmp_name']));
$image = base64_encode($image);
$price= mysqli_real_escape_string($conn,$_POST['price']);
echo $price;
$day = mysqli_real_escape_string($conn,$_POST['day']);
echo $day;


$sql= "insert into car values ('$brand','$model','$bodytype','$color','$condation','$transmisson','$enginesize','$enginetype','$location','$whatdo','$amount','$image','$price','$day')";

mysqli_query($conn,$sql);

}
}
 ?>