<?php
	//include auth.php file on all secure pages
	include("php/session-start.php");
	if(!isset($_SESSION["username"])){
		header("Location: login-register.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Co-founder</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<?php include 'templates/nav.php';?>
	<div class="container">
		<h1>Hello <?php echo $_SESSION['username']?></h1>
	</div>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>