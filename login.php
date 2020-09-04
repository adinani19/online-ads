<?php
 session_start();
 require_once('config/connect.php')
?>
<html>
    <head>
        <title>login</title>
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
        <form method="POST" action="login.php" class="signup-form">
				<article>
					<label>Email</label>
				 	<input class="form" type="email" name="email" placeholder="email" required>
				</article>
				<article>
					<label>Password</label>
					<input class="form"  type="password" name="password" placeholder="password" required>
				</article>
	 			<article>
				 	<input class="btn-custom"  type="submit" name="login" value="ingia">
				</article>
             </form>
             <?php
                if(isset($_POST['login'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $pass= mysqli_real_escape_string($con, $_POST['password']);

                    $sql="select * from user where email='$email' AND password='$pass'";
                    $query=mysqli_query($con,$sql);

                    if(!mysqli_error($con)){
                        if(mysqli_num_rows($query)>0){

                            $result=mysqli_fetch_assoc($query);
                            $jina=$result['name'];
                            $jinsi=$result['sex'];
                            $_SESSION['id'] = $result['id'];
                            $_SESSION['name']=$jina;
                            $_SESSION['sex']=$jinsi;

                            header("location:upload.php");
                        }else{
                            echo "no data in a database";
                        }
                    }else{
                        die(mysqli_error($con));
                    }
                }
                mysqli_close($con);
             ?>
        </section>
        <footer>
			 &copy; 2020 Tangaza Nasi.
         </footer>
    </body>
</html>