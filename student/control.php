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
	 		<form method="POST" action="control.php" class="signup-form" >
	 			<article>
                    <button class="btn-custom" name="submit">Futa</button>
				</article>
                <article>
                    <button class="btn-custom" name="submit">Badili Tangazo</button>
                </article>
            </form>

         </section>
         <footer>
            &copy; 2020 Tangaza Nasi. 
         </footer>
    </body>
</html>