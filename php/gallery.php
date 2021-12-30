<!DOCTYPE html>
<html>
<head>
    <link  href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="all">
    <link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="../jquery/jQuery.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>
<?php

$con = mysqli_connect('localhost','root','','carsell');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM car";
$result = mysqli_query($con,$sql);
   echo "<div class='row' id='galleryimg'>";
while($row = mysqli_fetch_array($result)) {
        echo "<div class='col-md-6 col-lg-4 col-sm-6'>
        <figure>
        <img src='data:image/jpeg;base64,".base64_encode($row[6])."' class='img-responsive imgGallary' style='width: 100%'>
        <figcaption>
        <h4><span class='nobr'>".$row[1]."</span></h4>
        <p><span class='nobr'>Price: <span>".$row[7]."</span></span></p>
        <p><span class='nobr'>condition: <span>".$row[3]."</span></span></p>
        <p><button id='".$row[0]."' class='btnview'>View</button></P>
        </figcaption>
        </figure>
        </div>";
}
echo "</div>";
mysqli_close($con);

?>
</body>
</html> 
 