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

		
		<link href="css/home.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
	
		<header>
			
			<nav>
				<a href="index.php"><img class="logo" src="images/seeding.svg" alt="" /></a>
				<a href="#feat" class="hide">Features</a>
				<a href="#login" class="hide">Login</a>
				<a href="#reg" class="hide">Register</a>
				<a href="contact.php" class="hide">Contact Us</a>
				<a href="about.html" class="hide">About Us</a>
				<!--<a class="last" href="#"><img class="menu" src="images/menu.svg" alt="" /></a>-->
			</nav>
			
			<div class="banner">
				
				<div class="center">
					<h1>Get Grocerries to you No need to go out!!!</h1>
					<a href="#reg">Register Now!!!</a>
				</div>
				
			</div>
			
		</header>
		
		
		
		<main>
			
			<section class="login" id="login">
				<h2>Login here and our services</h2>
				<div class="row">
				<form class="form" action="logvalidation.php" method="post">
					<table>
						<tr>
							<td>Username</td>
							<td><input type="text" name="name" required="required" /></td>
						</tr>
						
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" required="required" /></td>
						</tr>
						
						
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" value="Login" /></td>
						</tr>
					</table>
				</form>
				</div>
			</section>
			
			<section class="section-feature" id="feat">
			<h2>What makes us Special!!!</h2>
				<div class="row">
						
					<div class="feature">
						<img src="images/earth.svg" alt="" />
						<h3>Easy to buy!!!</h3>
						<p>
						    It is easy to login or get registered here.
						    The good user interface will make the user comfortable with the website and helps him to place order quiet easily.
						</p>
					</div>
					
					
					<div class="feature">
					<img src="images/hired.svg" alt="" />
						<h3>Reliable Prices!!!</h3>
						<p>
						    The prices are reliable which are available to all users. The services like sending items to the cutomer also made in quality way.
						</p>
					</div>
					
					
					<div class="feature">
					<img src="images/problem.svg" alt="" />
						<h3>Customer Satisfaction!!!</h3>
						<p>
						    The payment for the product by customer is made only when the customer is happy with the product. If the product is not appealded to customer it is taken back.
						</p>
					</div>
					
					
					<div class="feature">
					<img src="images/smile.svg" alt="" />
						<h3>Everyone Happy!!!</h3>
						<p>
						    The services provided by us  will be in goog quality and within time so it makes customer so happy about our services.
						</p>
					</div>
					
				</div>
			</section>
			
			<section class="login" id="reg">
				<h2>Register here and our services</h2>
				<div class="row">
				<form class="form" action="regverification.php" method="post">
					<table>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" required="required" /></td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" required="required" /></td>
						</tr>
						
						
						<tr>
							<td>Date of Birth</td>
							<td><input type="date" name="date" required="required" /></td>
						</tr>
						
						<tr>
							<td>Gender</td>
							<td><input type="radio" name="gender" checked="checked" value="male" /> Male
							<input type="radio" name="gender" value="female" /> Female</td>
						</tr>
						
						<tr>
							<td>Mobile</td>
							<td><input type="text" name="mobile" required="required" /></td>
						</tr>
					
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" required="required" /></td>
						</tr>
						
						
						<tr>
							<td>Confirm Password</td>
							<td><input type="password" name="cpassword" required="required" /></td>
						</tr>
						
						
						
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" value="Register" /></td>
						</tr>
					</table>
				</form>
				</div>
			</section>
			
			
		
		</main>
		
		<footer>
			<p>Get grocerries at your door.</p>
			
		</footer>
		
		
	
	</body>
	
	
</html>