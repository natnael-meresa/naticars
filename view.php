<!DOCTYPE html>
<html>
<head>
    <link  href="../bootstrap/css/bootstrap.css" rel="stylesheet" media="all">
    <link  href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="all">
    <script src="../jquery/jQuery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>

<?php

$id=strval($_GET['q']);


$con = mysqli_connect('localhost','root','','carsell');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM car WHERE id = '".$id."'";
$result = mysqli_query($con,$sql);

$brand="";
$color="";
$condation="";
$enginsize="";
$Price="";
$image ="";
$tobe="";
$username="";
$email="";
$phone="";
   
while($row = mysqli_fetch_array($result)) {
        $id=$row[0];
        $brand = $row[1];
        $color = $row[2];
        $condation = $row[3];
        $enginsize = $row[4];
        $tobe = $row[5];
        $image = base64_encode($row[6]);
        $Price = $row[7];
        $username = $row[9];    
}   
        $sql="SELECT * FROM users WHERE username = '".$username."'";
        $result = mysqli_query($con,$sql);
        while ($row = mysqli_fetch_array($result)) {
            $email = $row[1];
            $phone = $row[2];
        }

       echo ' <div class="container">
          <div class="jumbotron">
         <img src="data:image/jpeg;base64,'.$image.'" class="img-responsive imgGallary" style="width: 100%">      
            <p><span>brand : </span><span>'.$brand.'</span></p>
            <p><span>color : </span><span>'.$color.'</span></p>
            <p><span>condation: </span><span>'.$condation.'</span></p>
            <p><span>enginsize: </span><span>'.$enginsize.'</span></p>
            <p><span>tobe: </span><span>'.$tobe.'</span></p>
            <p><span>Price: </span><span>'.$Price.'</span></p>
            <h3>owner info</h3>
            <p><span>Email: </span><span>'.$email.'</span></p>
            <p><span>Phone: </span><span>'.$phone.'</span></p>
          </div>    
        </div>';


mysqli_close($con);

?>
</body>
</html> 