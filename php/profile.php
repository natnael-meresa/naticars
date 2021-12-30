<?php include('server.php'); ?>
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
echo ' <div class="container-fluid" style="padding-top:30px; padding-left:20%;">
        <div class="row" style="padding-left: 15%;">
        <figure>
        <img src="../image/avatar.png" style="border-radius: 50%; width: 200px;">
        </figure>
        </div>
        <div class="row" style="max-width: 500px;">
             <div class="panel panel-default">
                <div class="panel-heading">profile </div>
                <div class="panel-body">User:  <span style="padding-left: 10px;">'.$_SESSION["username"].'</span></div>
                <div class="panel-body">Email:  <span style="padding-left: 10px;">'.$_SESSION["email"].'</span></div>
                <div class="panel-body">TelPhone:  <span style="padding-left: 10px;">'.$_SESSION["telphone"].'</span></div>

              </div>
        </div>
     
      ';
      echo  '</div>';

?>
</body>