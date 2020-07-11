
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

		<title></title>
		<link href="css/reg.css" type="text/css" rel="stylesheet" />
		<style>
			p {
				line-height: 145%;
			}
		</style>
		
		
	</head>
	<body>
	
		<header>
			
			
				
			<nav>
				<a href="member.php"><img class="logo" src="images/seeding.svg" alt="" /></a>
				<a href="member.php" class="hide">Profile</a>
				
				<a href="orders.php" class="hide">Shop</a>
				<a href="orderdetails.php" class="hide">Details</a>
				<a href="contact.php" class="hide">Contact Us</a>
				<a href="logout.php" class="hide">Logout</a>
				
				<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>
			</nav>
			
			

		</header>
		
		
		<main>
	

<?php
session_start();
 $user=$_SESSION["name"];
 $kgs=$_POST["number"];
 $product=$_POST["product"];
 $price = $_POST["price"];
 
 
 $orders = $kgs . "*" .$product. " ".$price."=".$price*$kgs;
 $place = $_POST["place"];

if($user){
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
	mysqli_query($connect,"UPDATE users SET  orders ='$orders' WHERE name='$user'");
		mysqli_query($connect,"UPDATE users SET  place='$place' WHERE name='$user'");
		echo "<p>Hi $user!!!.Your will get a call from us to confirm your order .
		<br /> product = $product
		
		<br/>Kgs = $kgs <br />Price = " .$price * $kgs . "</p>";
		
		


}else
{
	
	echo "<p>You must be logged in.</p>";
}
?>


</main>

<footer>
	<p>Esay to buy </p>
</footer>
</body>

</html>