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
		justify-content: center;
		align-center: center;
		min-height: 100vh;
	}
		td{
			
			padding: 10px;
		}
		tr {
			background-color: #ecf0f1;
		}
		
		input[type="submit"]
		{
			background-color: #2ecc71;
			color: white;
			border: 0px;
			padding: 10px;
			border-radius: 20px;
		}
	</style>
	

</head>

<body>


<main>
<?php
session_start();
 @$_SESSION['name'];
?>

<?php

$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"marketmany");


$select=mysqli_query($connect,"SELECT * FROM users");
$numrows=mysqli_num_rows($select);
echo "

<table>";

while($row=mysqli_fetch_assoc($select)){
	$name=$row["name"];
	$gender=$row["gender"];
	$phone = $row["phone"];
	$email = $row["email"];
	$orders=$row["orders"];
	$place=$row["place"];
		

	echo "
		
	<tr>
	<form action='co.php' method='post'>
	<td>
	$name
	</td>
	<td>
	$gender
	</td>
	
	<td>
	$gender
	</td>
	
	
	<td>
	$phone
	</td>
	
	<td>
	$email
	</td>
	
	<td>
	$orders
	</td>
	
	<td>
	$place
	</td>
	
	<td>
	<input type='hidden' name='name' value='$name' />
	<input type='hidden' name='email' value='$email' />
	<input type='submit' value='confirm Order'/>
	</td>
	</form>
	</tr>
	";
}
echo "</table>";
?>

</main>

</body>

</html>