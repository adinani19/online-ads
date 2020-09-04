<?php
    session_start();
    require_once('config/connect.php');
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css"  href="res/css/my.css">
    </head>
    <body>
    <header>
        <img class="logo" src="res/images/logo.png" alt="my logo">
	 		<nav>
	 			<ul class="my-list">
	 				<li class="item"><a href="home.php">Home</a></li>
	 				<li class="item"><a href="login.php">Login</a></li>
	 				<li class="item"><a href="logout.php">Logout</a></li>
	 			</ul>
	 		</nav>
        </header>
        <section class="product-section">
        <?php
            $query="select * from bidhaa";
            $result=mysqli_query($con,$query);
            if(!mysqli_error($con)){
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                                <div class="product">									
                                    <img src="images/<?php echo $row['prod_photo']; ?>">
                                    <div class="description"><?php echo $row['prod_description']; ?>"</div>
                                </div>
    
                        <?php		
                    }
                }

            }else{
                echo "Failed. there was an error." . mysqli_error($con);
            }
            mysqli_close($con);
        ?>
            
        </section>
        <section class="signup-section">
            <article>
                <form method="POST" action="sign.php" class="signup-form">
                    <button class="btn-custom" name="batani"> Bofya hapa kuweka tangazo lako</button>
                </form>
            </article>                
            <?php
                if(isset($_POST['batani'])){
                    header("location:sign.php");
                }
            ?>
        </section>
        <footer>
			 &copy; 2020 Tangaza Nasi.
         </footer>
    </body>
</html>