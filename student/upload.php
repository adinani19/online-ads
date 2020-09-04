<?php
    session_start();
    require_once('config/connect.php');
?>
<html>
    <head>
        <title>upload</title>
        <link rel="stylesheet" type="text/css"  href="style/my.css">
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
	 		<form method="POST" action="upload.php" class="signup-form" enctype="multipart/form-data">
	 			<article>
				 	<label>picha</label>
					<input class="form" type="file" name="photo" required>
                </article>
				<article>
					<label>maelezo ya bidhaa</label>
				 	<textarea class="form" name="description" placeholder="maelezo" required></textarea>
				</article>
                <article>
                    <button class="btn-custom" name="submit">Pakia</button>
                </article>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $filename=$_FILES['photo']['name'];
                    $tmpname=$_FILES['photo']['tmp_name'];
                    $filesize=$_FILES['photo']['size'];
                    $filetype=$_FILES['photo']['type'];
                    $describe=$_POST['description'];
                    
                    if($filesize>3000000){
                        echo "file size too large";
                    }else {
                        if($filetype == 'image/jpeg' || $filetype == 'image/jpg' || $filetype == 'image/png'){
                            
                            $newfilename = time() . "-" . $filename;
                            if(move_uploaded_file($tmpname, 'images/'.$newfilename)){

                                $sql = "INSERT INTO bidhaa (prod_photo,prod_description, user_id) 
                                        values ('$newfilename','$describe', '$_SESSION[id]')";
                                mysqli_query($con, $sql);
                                if(!mysqli_error($con)){
                                    header("location:home.php");
                                }else{
                                    echo "There was an error." . mysqli_error($con);
                                }

                            }else{
                                echo "Your image could not be uploaded.";
                            }


                        }else{
                            echo "Make sure your file is an image";
                        }
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