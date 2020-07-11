<!DOCTYPE html>
<html>

	<head>
		<link href="css/contact.css" type="text/css" rel="stylesheet" />
		<style>
		    .spc {
		        
		        
		        background-color: #2ecc71;
		        text-align: center;
		        padding: 10px;
		    }
		</style>
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
			
		</header>
		
		<main>
			
				<section class="login" id="form">
				<h2>Login here and our services</h2>
				<div class="row">
				<form class="form" action="mailer-contact.php" method="post">
				    
				    
					<table>
					    
					   <tr> 
					    <td colspan="2" class="spc">
					        <?php
                        
                        if($_GET['success'] == 1)
                        {
                            echo "<div class=\"form-messages success\">
                                Thank you! Your message has been sent.
                            </div>";
                        }
                        
                        
                        
                        if($_GET['success'] == -1)
                        {
                            echo "<div class=\"form-messages error\">
                                Oops! Something went wrong.
                            </div>";
                        }
                        

                        ?>
					        
					    </td>
					   </tr>
						<tr>
							<td>Name</td>
							<td><input type="text" name="name" required="required" /></td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td><input type="email" name="email" required="required" /></td>
						</tr>
						
						
						<tr>
							<td>Drop Us a Line</td>
							<td><textarea name="message" cols="60" rows="10"></textarea></td>
						</tr>
						
						
						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" value="Send" /></td>
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