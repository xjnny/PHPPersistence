<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h2>Session</h2>
         <?php
        if (!isset($_SESSION['count'])) {
            $_SESSION['count'] = 1;
        } else {
            $_SESSION['count']++;
        }
        ?>
        <p>You have visited this page <?php echo $_SESSION['count']; ?> times in this session.</p>

        <h2>Cookies</h2>
        <?php
            $cookie_name = "count";
            $count_cookie = 1;
            if (isset($_COOKIE[$cookie_name])) {
                $count_cookie = $_COOKIE[$cookie_name] + 1;
            }
            setcookie($cookie_name, $count_cookie, time() + (86400 * 30), "/");
        ?>
        <p>You have visited this page <?php echo $count_cookie; ?> times on this computer.</p>
        <h2>Database</h2>
        <?php 
            include ("counter.php");
        ?>
        <h2>File</h2>
    </body>
</html>
