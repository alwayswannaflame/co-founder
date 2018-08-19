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
		<?php 
			require('php/db.php');
			$user=$_SESSION['username'];
			$link="SELECT * FROM `users` WHERE username='$user'";
			$result = mysqli_query($con,$link) or die(mysql_error());

			$up = mysqli_fetch_assoc($result);
			if (isset($_REQUEST['firstname'])){
			$firstname=$_POST['firstname'];
			$secondname=$_POST['secondname'];
			$phonenumber=$_POST['phonenumber'];
			$emailadress=$_POST['email'];
			$state=$_POST['state'];
			$city=$_POST['city'];	
			$query="UPDATE users
			SET firstname = '$firstname',  secondname = '$secondname', phonenumber = '$phonenumber' , emailadress = '$emailadress' , state = '$state' , city = '$city' , 
			up = 1
			WHERE username='$user'";
			if ($con->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
				} 
				if (mysqli_query($con,$query) === TRUE) {
				    echo "New records created successfully";
				} else {
				    echo "Error: " . $query . "<br>" . $con->error;
				}

				$con->close();}	
	        if($up['up']==1){ 

	    ?>
	     <p> You have your profile updated </p>
	     <a href="#" class="btn btn-primary">Update profile</a>
		
		<dl>
  			<dt>Username</dt>
  			<dd><?php echo $up['username']; ?></dd>
  			<dt>Firstname</dt>
  			<dd><?php echo $up['firstname'];?></dd>
  			<dt>Lastname</dt>
  			<dd><?php echo $up['secondname'];?></dd>
  			<dt>Phone</dt>
  			<dd><?php echo $up['phonenumber']; ?></dd>
  			<dt>Email</dt>
  			<dd><?php echo $up['emailadress'];?></dd>
  			<dt>State</dt>
  			<dd><?php echo $up['state']; ?></dd>
  			<dt>City</dt>
  			<dd><?php echo $up['city'];?></dd>
		</dl>
		<form name="registration" method="post" action="" class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="firstname">First name</label>
					<input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $up['firstname'];?>">
				</div>
				<div class="form-group">
					<label for="secondname">Second name</label>
					<input type="text" name="secondname" class="form-control" id="secondname" value="<?php echo $up['secondname'];?>">
				</div>
				<div class="form-group">
					<label for="phonenumber">Phone number</label>
					<input type="tel" name="phonenumber" class="form-control" id="phonenumber" value="<?php echo $up['phonenumber'];?>">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" value="<?php echo $up['emailadress'];?>">
				</div>
				<div class="form-group">
					<label for="state">State</label>
					<input type="text" name="state" class="form-control" id="state" value="<?php echo $up['state'];?>">
				</div>
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" name="city" class="form-control" id="city" value="<?php echo $up['city'];?>">
				</div>
			</div>
			<div class="col-sm-12 text-center">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>	
		<?php 
		     }else{
		?>
		<h1>Hello <?php echo $_SESSION['username']?> write us some aditional info :</h1>	
		<form name="registration" method="post" action="" class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label for="firstname">First name</label>
					<input type="text" name="firstname" class="form-control" id="firstname" placeholder="Enter first name">
				</div>
				<div class="form-group">
					<label for="secondname">Second name</label>
					<input type="text" name="secondname" class="form-control" id="secondname" placeholder="Second name">
				</div>
				<div class="form-group">
					<label for="phonenumber">Phone number</label>
					<input type="tel" name="phonenumber" class="form-control" id="phonenumber" placeholder="Phone number">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" id="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="state">State</label>
					<input type="text" name="state" class="form-control" id="state" placeholder="State">
				</div>
				<div class="form-group">
					<label for="city">City</label>
					<input type="text" name="city" class="form-control" id="city" placeholder="City">
				</div>
			</div>
			<div class="col-sm-12 text-center">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>	
		<?php	
			}
		
		?>
	</div>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>