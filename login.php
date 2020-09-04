<?php
 session_start();
 require_once('config/connect.php')
?>
<html>
<head>
        <title>login- MoreAds</title>
        <link rel="stylesheet" type="text/css"  href="res/css/my.css">
    </head>
    <body>
    <section class="section">
        <form method="POST" action="login.php" class="form">

            <img class="logo" src="res/images/logo.png" alt="my logo">

            <article>
                <label>Email</label>
                <input class="form-input" type="email" name="email" placeholder="email" required>
            </article>
            <article>
                <label>Password</label>
                <input class="form-input"  type="password" name="password" placeholder="password" required>
            </article>
            <article>
                <button class="btn-custom btn-block" type="submit" name="login">Ingia</button>
            </article>
            <p>Do not have an account? <a href="sign.php">Register</a></p>
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
        &copy; 2020 More Ads, All Rights Reserved.
    </footer>
    </body>
</html>