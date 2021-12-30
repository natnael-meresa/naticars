<?php
	session_start();
	$username = "";
	$email =  "";
	$telphone = "";
	$password = "";

	$db = mysqli_connect('localhost','root','','carsell');

	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);

		$email = mysqli_real_escape_string($db,$_POST['email']);
		$telphone = mysqli_real_escape_string($db,$_POST['telphone']);
		$password = mysqli_real_escape_string($db,$_POST['psw']);
		$con_password = mysqli_real_escape_string($db,$_POST['psw-repeat']);


			$enpassword = md5($password);
			
			
			$sql= "INSERT INTO users (username,email,telphone,password) VALUES ('$username','$email','$telphone','$enpassword')";
			mysqli_query($db ,$sql);

			header('location:../html/home.html');
			$_SESSION['username']=$username;
			$_SESSION['email']=$email;
			$_SESSION['telphone']=$telphone;

				
		
			

	}

		if(isset($_POST['login'])){

		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
			$result = mysqli_query($db, $query);
			
			if(mysqli_num_rows($result)==1 ){

				header('location:../html/home.html');
				$query2 = "SELECT * FROM users WHERE username='$username'";

				$result2 = mysqli_query($db, $query2);

				
				while ($row=mysqli_fetch_array($result2)) {
					$_SESSION['email']=$row[1];
					$_SESSION['telphone']=$row[2];
				}
				$_SESSION['username']=$username;
			
			}else{
				header('location:../index.html');
			}


}
		if (isset($_POST['update'])) {
			$user = mysqli_real_escape_string($db,$_POST['username']);
			$emma = mysqli_real_escape_string($db,$_POST['email']);
			$tel = mysqli_real_escape_string($db,$_POST['telphone']);
			$pas = mysqli_real_escape_string($db,$_POST['pwd']);
			$pass = md5($pas);
			$username = $_SESSION['username'];
			echo "hell";
			$query = "UPDATE users set username = '$user',email='$emma', telphone='$tel' , password = '$pass' where username = '$username'";
		

			if(mysqli_query($db ,$query)){
				header('location:../html/dashbord.html');
			}else {
				header('location:../html/dashbord.html');
			}
			 

		}
		if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			unset($_SESSION['email']);
			unset($_SESSION['telphone']);
		}

?>
