<?php
include("includes/connection.php");
include("functions/functions.php");
?>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php">Coding Cafe</a>
		</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	
	      	<?php 

	      		$username = $_SESSION['username'];
	      		$get_user = "select * from users where username ='$username'";
	      		$run_user = mysqli_query($conn,$get_user);
	      		$row = mysqli_fetch_array($run_user);

	      		$user_id = $row['user_id'];
	      		$username = $row['username'];
	      		$firstname = $row['firstname'];
	      		$lastname = $row['lastname'];
	      		$gender = $row['gender'];
	      		$home_address = $row['home_address'];
	      		$grade = $row['grade'];
	      		$class_teacher = $row['class_teacher'];
	      		$class = $row['class'];
	      		$recovery_account = $row['recovery_account'];


	      		$user_posts = "select * from posts where user_id = '$user_id'";
	      		$run_posts = mysqli_query($conn,$user_posts);
	      		$posts = mysqli_num_rows($run_posts);



		
			?>

	        <li><a href='profile.php<?php echo "u_id=$user_id" ?>'><?php echo "$firstname"; ?></a></li>
	       	<li><a href="home.php">Home</a></li>
			<li><a href="members.php">Find People</a></li>
			<li><a href="messages.php?u_id=new">Messages</a></li>


					<?php
						echo"

						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><span><i class='glyphicon glyphicon-chevron-down'></i></span></a>
							<ul class='dropdown-menu'>
								<li>
									<a href='my_post.php?u_id=$user_id'>My Posts <span class='badge badge-secondary'>$posts</span></a>
								</li>
								<li>
									<a href='edit_profile.php?u_id=$user_id'>Edit Account</a>
								</li>
								<li role='separator' class='divider'></li>
								<li>
									<a href='logout.php'>Logout</a>
								</li>
							</ul>
						</li>
						";
					?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<form class="navbar-form navbar-left" method="get" action="results.php">
						<div class="form-group">
							<input type="text" class="form-control" name="user_query" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-info" name="search">Search</button>
					</form>
				</li>
			</ul>
		</div>
	</div>
</nav>