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
				<a href="#" class="hide">Contact Us</a>
				<a href="#" class="hide">About Us</a>
				<!--<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>-->
			</nav>

			</header>

			
			<main>

<?php 

	
	$name = $_POST['name'];
	$pass = $_POST['password'];
	$pass1 = $_POST['cpassword'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$gender = $_POST['gender'];
	$phone = $_POST['mobile'];
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
$namecheck=mysqli_query($connect,"SELECT name FROM users WHERE name='$name'");
$count=mysqli_num_rows($namecheck);
if($count !=0){
	echo "<div class='regs'>";
echo "<p>Already a user exists with this username.<br />Go back and try again.</p>";
echo "</div>";
exit;
	
}

$emailcheck=mysqli_query($connect,"SELECT email FROM users WHERE email='$email'");
$ecount=mysqli_num_rows($emailcheck);
if($ecount!=0){
	echo "<div class='regs'>";
echo "<p>A user alredy registered with this email.<br />Go back and try again.</p>";
echo "</div>";
exit;
}





if(strlen($name)<6){
echo "<div class='regs'>";
echo "<p>Name Should atleast have 6 letters.<br />Go back and try again.</p>";
echo "</div>";
exit;
}


if(strlen($name)>30){
echo "<div class='regs'>";
echo "<p>Name should have less than 31 characters.<br />Go back and try again.</p>";
echo "</div>";
exit;
}




if(strlen($pass)>30 || strlen($pass1)>30){
echo "<div class='regs'>";
echo "<p>Your password should not excede 30 characters.<br />Go back and try again.</p>";
echo "</div>";
exit;
}

if(strlen($pass)<8|| strlen($pass1)<8){
echo "<div class='regs'>";
echo "<p>Your password should not be less than 8.<br />Go back and try again.</p>";
echo "</div>";
exit;
}
if($pass!=$pass1){
echo "<div class='regs'>";
echo "<p>Your password and Repeat Password are not matching.<br />Go back and try again.</p>";
echo "</div>";
exit;
}







$enter=mysqli_query($connect,"INSERT INTO users(name, email, password, db, gender, phone, orders, confirm, place, sent) VALUES('$name', '$email', '$pass', '$date', '$gender', '$phone', 'nothing', 'nothing', '--', '--')");

echo "<p>Hi ".$name." you have sucessfull Reistered.</p>";
echo "<a href='index.php#login'>Sign In</a>";


?>

</main>

	<footer>
			<p>Get grocerries at your door.</p>
			
		</footer>
		

	</body>

</html>