<?php
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['email']);

    session_destroy();

    header('location: home.php');
?>
<html>
    <head>
        <title>logout</title>

    </head>
    <body>
    <footer>
        &copy; 2020 Tangaza Nasi. 
    </footer>
    </body>
</html>