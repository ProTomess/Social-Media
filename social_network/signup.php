<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #187FAB;
	}
	#signup{
		width: 60%;
		border-radius: 30px;
	}

</style>
<body>
<div class="row">
	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">Matome e-Tech</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Join Matome e-Tech</strong></h3>
				<hr>
			</div>
			<div class="l-part">
				<form action="" method="post">
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="First Name" name="firstname" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input type="text" class="form-control" placeholder="First Name" name="lastname" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Password" name="password" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="email" type="email" class="form-control" placeholder="Email" name="u_email" required="required">
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control" name="u_country" required="required">
							<option disabled>Select your Country</option>
							<option>Pakistan</option>
							<option>United States of America</option>
							<option>India</option>
							<option>Japan</option>
							<option>UK</option>
							<option>France</option>
							<option>Germany</option>
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
						<select class="form-control input-md" name="u_gender" required="required">
							<option disabled>Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<!--<option>Others</option>-->
						</select>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
						<input type="date" class="form-control input-md" placeholder="Email" name="u_birthday" required="required">
					</div><br>
					<a style="text-decoration: none;float: right;color: #187FAB;" data-toggle="tooltip" title="Signin" href="signin.php">Already have an account?</a><br><br>

					<center><button id="signup" class="btn btn-info btn-lg" name="sign_up">Signup</button></center>
					<?php include("insert_user.php"); ?>
				</form>
			</div>
		</div>
	</div>
</div>



	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>