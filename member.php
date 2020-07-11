<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<link href="css/member.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	
		<header>
			
			<nav>
				<a href="member.php"><img class="logo" src="images/seeding.svg" alt="" /></a>
				<a href="member.php" class="hide">Profile</a>
				
				<a href="orders.php" class="hide">Shop</a>
				<a href="contact.php" class="hide">Contact Us</a>
				<a href="logout.php" class="hide">Logout</a>
				<!--<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>-->
			</nav>
		</header>
		
		<main>
			
			<section class="details">
				<div>
					<figure><img src="images/seeding.svg" />
					<figcaption>Welcome to organicmark.info</figcaption>
					</figure>
				</div>
				
				<div>
				
				<?php
session_start();
@$user=$_SESSION["name"];
if(@$_SESSION["name"]){
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
	
	$select=mysqli_query($connect,"SELECT * FROM users WHERE name='$user'");
	$numrows=mysqli_num_rows($select);
	echo "<table>";
	
	while($row=mysqli_fetch_assoc($select)){ 
     $name=$row["name"];	
	 $dob=$row["db"];
	 $email=$row["email"];
	 $gender=$row["gender"];
	 $password=$row["password"];
	 $phone=$row["phone"];
	 
	 echo "<tr class='even'>
	 <th>Name</th>
	 <td>$name</td>
	 </tr>
	 
	 <tr>
	 <th>Date Of Birth</th>
	 <td>$dob</td>
	 </tr>
	 
	 <tr class='even'>
	 <th>Email</th>
	 <td>$email</td>
	 </tr>
	 
	 <tr>
	 <th>Password</th>
	 <td>$password</td>
	 </tr>
	 
	 <tr class='even'>
	 <th>Phone</th>
	 <td>$phone</td>
	 </tr>
	 ";
	 
	 
	 
	}
	
	echo "</table>";
	
}else{
	
	echo"<p>You must be logged in.</p>";
}
?>


				</div>
			</section>
			
		</main>
		
		<footer>
			<p>Get what you want</p>
		</footer>
		
		
	</body>
		
		
</html>
		
	