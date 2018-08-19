<?php
	//include session-start.php
	include("php/session-start.php");  
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
	<div class="jumbotron hero">
        <div class="container">
          <h1 class="display-3">Hello, world!</h1>
          <p>This is my brand website which does a few things for now but i hope i'll improve it soon</p>
          <p>You can register, login, update your profile, and soon to come upload stuff on your profile like quotes and photos with descriptions, working on it ;)</p>
          <p><a class="btn btn-primary btn-lg" href="login-register.php" role="button">Register »</a></p>
        </div>
      </div>
	<?php include 'templates/footer.php';?>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>