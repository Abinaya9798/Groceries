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
session_start();

session_destroy();
echo "<p>You have deen logged out.Go back to <a href='index.php#login'>sign in</a> page.</p>";
?>


</main>

</body>

</html>