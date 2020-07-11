<?php 

			
session_start();
@$user=$_SESSION["name"];
if(@$_SESSION["name"]){
	
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");
	$select=mysqli_query($connect,"SELECT * FROM users WHERE name='$user'");
	$numrows=mysqli_num_rows($select);
	

?>

<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137037968-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137037968-1');
</script>

		<link href="css/orders.css" type="text/css" rel="stylesheet" />
		
		<style>
		    
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
				
				<!--<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>-->
			</nav>
			
			<div class="banner">
				
				<div class="center">
					<h1>Get Grocerries to you No need to go out!!!</h1>
					<!--<a href="#">Register Now!!!</a>-->
				</div>
				
			</div>
			
		</header>
		
		

		<main>
		
			<section class="buy">
				
				<div class="row buynow">
					<div class="product">
						<div class="pic" id="pic1">
							<h4>Tomatoes</h4>
						</div>
						<form action="confirm.php" method="post">
						<ul>
							<li>1kg/rs40</li>
							<li><input type="number" name="number" placeholder="kgs" required="required" /></li>
							<li><select name="place">
								<option value="katpadi" selected>Katpadi</option>
								<option value="gandhi nagar">Gandhi Nagar</option>
								
								<option value="sathuvachari">Sathuvachari</option>
								
								<option value="thorapadi">Thorapadi</option>
								<option value="konavattam">Konavattam</option>
								<option value="dharapadavedu">Dharapadavedu</option>
								<option value="shenbakkam">Shenbakkam</option>
								<option value="kamaraj nagar">Kamaraj Nagar</option>
								
								
							</select></li>
							<?php
							
							while($row=mysqli_fetch_assoc($select)){ 
							$email=$row["email"];
							 $phone=$row["phone"]; 
							echo"<li>$email</li>";
							echo "<li>$phone</li>";
							}
							
					
							
							?>
							<li><input type="hidden" name="product" value="Tomatoes" />
							<input type="hidden" name="price" value="40" />
							<input type="submit" value="Place Order" /></li>
						</ul>
						</form>
					</div>
					
					
					<div class="product">
						<div class="pic" id="pic2">
							<h4>Potatos</h4>
						</div>
						<form action="confirm.php" method="post">
						<ul>
							<li>1kg/rs60</li>
							<li><input type="number" name="number" placeholder="kgs" required="required" /></li>
							<li>
							    
							    <select name="place">
								<option value="katpadi" selected>Katpadi</option>
								<option value="gandhi nagar">Gandhi Nagar</option>
								
								<option value="sathuvachari">Sathuvachari</option>
								
								<option value="thorapadi">Thorapadi</option>
								<option value="konavattam">Konavattam</option>
								<option value="dharapadavedu">Dharapadavedu</option>
								<option value="shenbakkam">Shenbakkam</option>
								<option value="kamaraj nagar">Kamaraj Nagar</option>
								
								
							</select>
							</li>
							<?php
							echo"<li>$email</li>";
							echo "<li>$phone</li>";
							
							
					
							
							?>
							<li>
							<input type="hidden" name="product" value="potato" />
							<input type="hidden" name="price" value="60" />
							<input type="submit" value="Place Order" /></li>
						</ul>
						</form>
					</div>
					
					
					
					<div class="product">
						<div class="pic" id="pic3">
							<h4>Carrot</h4>
						</div>
						<form action="confirm.php" method="post">
						<ul>
							<li>1kg/rs50</li>
							<li><input type="number" name="number" placeholder="kgs" required="required" /></li>
							<li>
							    
							    <select name="place">
								<option value="katpadi" selected>Katpadi</option>
								<option value="gandhi nagar">Gandhi Nagar</option>
								
								<option value="sathuvachari">Sathuvachari</option>
								
								<option value="thorapadi">Thorapadi</option>
								<option value="konavattam">Konavattam</option>
								<option value="dharapadavedu">Dharapadavedu</option>
								<option value="shenbakkam">Shenbakkam</option>
								<option value="kamaraj nagar">Kamaraj Nagar</option>
								
								
							</select>
							    
							</li>
							<?php
							
							echo"<li>$email</li>";
							echo "<li>$phone</li>";
								
							
					
							
							?>
							<li>
							<input type="hidden" name="product" value="carrot" />
							<input type="hidden" name="price" value="50" />
							<input type="submit" value="Place Order" /></li>
						</ul>
						</form>
					</div>
					
					
					
					<?php
					}else{
	
	echo"<p>You must be logged in.</p>";
}
					?>
				</div>
				
			</section>
		</main>
		
		<footer>
				<p>Get grocerries at your door.</p>
		</footer>
		
	</body>
	
	
</html>