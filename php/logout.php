
<?php 
	include('server.php');
	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['email']);
	unset($_SESSION['telphone']);
	header('location:../index.html');

 ?>