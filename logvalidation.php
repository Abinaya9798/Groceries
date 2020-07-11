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

		<link type="text/css" rel="stylesheet" href="css/reg.css">
	</head>
	
	<body>
	
	
			<header>
			
			<nav>
				<a href="index.php"><img class="logo" src="images/seeding.svg" alt="" /></a>
				<!--<a href="#" class="hide">Features</a>
				<a href="#" class="hide">Login</a>
				<a href="#" class="hide">Register</a>-->
				<a href="contact.php" class="hide">Contact Us</a>
				<a href="about.html" class="hide">About Us</a>
				<!--<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>-->
			</nav>

			</header>

			
			<main>



<?php 
$username=$_POST["name"];
$password=$_POST["password"];

$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
$query=mysqli_query($connect,"SELECT * FROM users WHERE name='$username'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
	while($row=mysqli_fetch_assoc($query)){
		$dbusername=$row["name"];
		$dbpassword=$row["password"];
		
	}
	
	if($username==$dbusername && $password==$dbpassword){
		session_start();
		$_SESSION['name']=$dbusername;
			
				echo "<div class='regs'>";
						echo "<p>You are logged in.</p>";
						echo "<a href='member.php'>Click here</a>";

echo "</div>";
			
			exit;
			
			
	}else{
		
			echo "<div class='regs'>";
echo "<p>Incorrect Password.<br />Go back and try again.</p>";
echo "</div>";
exit;
	}
}else{
	echo "<div class='regs'>";
echo "<p>User does not exist.<br />Go back and try again.</p>";
echo "</div>";
exit;	
}



?>




</main>

	<footer>
			<p>Get grocerries at your door.</p>
			
		</footer>
		

	</body>

</html>