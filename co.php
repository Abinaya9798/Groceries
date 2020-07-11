<!DOCTYPE html>

<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137037968-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137037968-1');
</script>


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
$email = $_POST["email"];
 

if($user){
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
	mysqli_query($connect,"UPDATE users SET  confirm ='confirmed' WHERE name='$user'");
		
		echo "<p>Hi $user!!!.Your order has been confirmed. You will recive the product soon.";
		
		
mail($email,"Organicmark.info","Your order has been confirmed.","From: dvachyuthroyal@gmail.com");

}else
{
	
	echo "<p>You must be logged in.</p>";
}
?>






</main>

</body>

</html>