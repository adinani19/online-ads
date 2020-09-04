<?php
    session_start();
    require_once('config/connect.php');
?>
<html>
    <head>
        <title>View - MoreAds</title>
        <link rel="stylesheet" type="text/css"  href="res/css/my.css">
    </head>
    <body>
    <header>
        <img class="logo" src="res/images/logo.png" alt="my logo">
        <nav>
            <a href="index.php">Home</a>
            <a href="login.php">Login</a>
            <a href="sign.php">Register</a>
        </nav>
    </header>
    <section class="main-section">
        <aside>
            <header>Categories</header>
            <section class="list">
                <div>All <span class="badge">10</span></div>
                <div>Food &amp; Drinks <span class="badge">10</span></div>
                <div>Home Appliances <span class="badge">10</span></div>
                <div>Clothes &amp; Designs <span class="badge">10</span></div>
            </section>
        </aside>

        <main class="product-view">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum minima quibusdam laudantium possimus eaque </h3>
            									
            <img src="res/images/logo.png" class="">

            <div>
                <h3>Posted:</h3> 
                12/01/2020 06:00 AM
            </div>

            <div class="description">
                <h3>Description</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur numqu illum porro non quidem nat.
            </div>
            
        </main>
    </section>

    <footer>
        &copy; 2020 More Ads, All Rights Reserved.
    </footer>
    </body>
</html>