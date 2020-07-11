<!DOCTYPE html>

<html>

<head>

	<style>
	
	main {
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 100vh;
		
	}
	p {
		
		background-color: #2ecc71;
		color: white;
		padding: 40px 10px;
		font-size: 20px;
		border-radius: 20px;
	}
	</style>
	

</head>

<body>


<main>

<?php

$user=$_POST["name"]; 
 

if($user){
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
	mysqli_query($connect,"UPDATE users SET  sent ='Product Delivered Successfully' WHERE name='$user'");
		
		echo "<p>Hi $user!!!.The order is succssfully completed.";
		
		


}else
{
	
	echo "<p>You must be logged in.</p>";
}
?>






</main>

</body>

</html>