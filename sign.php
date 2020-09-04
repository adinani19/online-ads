<!DOCTYPE html>
 <html>
 <head>
        <title>Register - MoreAds</title>
        <link rel="stylesheet" type="text/css"  href="res/css/my.css">
    </head>
    <body>
        <section class="section">
            <form method="POST" action="sign.php" class="form">

                <img class="logo" src="res/images/logo.png" alt="my logo">

                <article>
                    <label>First name</label>
                    <input class="form-input" type="text" name="fname" placeholder="first name" required>
                </article>
                <article>
                    <label>surname</label>
                    <input class="form-input" type="text" name="sname" placeholder="sur name" required>
                </article>
                <article>
                    <label>Phone number</label>
                    <input class="form-input" type="text" name="phone" placeholder="phone number" required>
                </article>
                <article>
                    <label>Gender</label>
                    <input type="radio" name="gender" id="male" required>
                    <label for="male"></label>
                    <input type="radio" name="gender" id="female" required>
                    <label for="female"></label>
                </article>
                <article>
                    <label>Email</label>
                    <input class="form-input"  type="email" name="email" placeholder="email" required>
                </article>
                <article>
                    <label>Password</label>
                    <input class="form-input"  type="password" name="password" placeholder="password" required>
                </article>
                <article>
                    <button class="btn-custom btn-block" type="submit" name="login">Ingia</button>
                </article>
                <p>Already registered? <a href="login.php">Login</a></p>
            </form>
        </section>
        <footer>
            &copy; 2020 More Ads, All Rights Reserved.
        </footer>
     </body>
</html>
