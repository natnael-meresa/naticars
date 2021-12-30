<?php
	

	$db = mysqli_connect('localhost','root','','carsell');

	if(isset($_POST['register'])){
		


			
			$sql= "INSERT INTO cars (brand,model,bodytype,color,condation,transmisson,enginesize,enginetype,location,descion,amount) VALUES ('$brand','$model','$bodytype','$color','$condation','$transmisson','$enginesize','$enginetype','$location','$whatdo','$amount')";)";
			mysqli_query($db ,$sql);
			
	}



?>
