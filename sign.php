<!DOCTYPE html>
 <html>
	 <head>
	 	<title>home</title>
	 	<link rel="stylesheet" type="text/css" href="style/my.css">
	 </head>
	 <body>
	 	<header>
	 		<img class="logo" src="images/logo.png" alt="my logo">
	 		<nav>
	 			<ul class="my-list">
	 				<li class="item"><a href="home.php">Home</a></li>
	 				<li class="item"><a href="login.php">Login</a></li>
	 				<li class="item"><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</nav>
	 	</header>
	 	<section class="signup-section">
	 		<form method="POST" action="sign.php" class="signup-form">
	 			<article>
				 	<label>Username</label>
					<input class="form" type="text" name="name" placeholder="username" required>
				</article>
				<article>
					<label>Email</label>
				 	<input class="form" type="email" name="email" placeholder="email" required>
				</article>
				<article>
					<label>Sex</label>
					<input type="radio" name="sex" value="male" id="male">
					<label for="male">Male</label>
					<input type="radio" name="sex" value="female" id="female">
					<label for="female">Female</label>
				</article>
				<article>
					<label>Password</label>
					<input class="form"  type="password" name="password" placeholder="password" required>
				</article>
	 			<article>
				 	<input class="btn-custom"  type="submit" name="submit" value="jisajili">
				</article>
	 		</form>
	 		<?php 
				require_once('config/connect.php');

				if(isset($_POST['submit'])){

					$username = mysqli_real_escape_string($con, $_POST['name']);	 			
					$email = mysqli_real_escape_string($con, $_POST['email']);
					$gender = mysqli_real_escape_string($con, $_POST['sex']);
					$pass = mysqli_real_escape_string($con, $_POST['password']);
		
					$sql1="INSERT INTO user (name,email,sex,password) values ('$username','$email','$gender','$pass')";
						
					$query=mysqli_query($con,$sql1);

						if(!mysqli_error($con)){
							header("location:login.php");
						}else{
							die(mysqli_error($con));
						}
				}
					
				mysqli_close($con);
			 ?>
			 
		 </section>
		 <section>
			 <p style="text-align:center">already sign in?, <a href="login.php">click here to login</a></p>
		 </section>		
		 <footer>
        	<!-- &copy; 2020 Tangaza Nasi.  -->
   		 </footer>
	 </body>
 </html> 