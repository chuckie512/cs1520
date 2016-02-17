<?php
    session_start();
    if(!isset($_SESSION["name"])){
        $_SESSION["error"] = "<p class='error'>You are not logged in!<br/>Please log in below</p>";
        header('location: '.'ex4.php');
        die();
    }

    $name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin: 2%;
            }
            footer{
                font-size: 6pt;
                color: grey;
                text-align: center;
                text-wrap: normal;
                margin: 5px;
                bottom: 0;
                position: fixed;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <?php
            echo "Welcome, ".$name;
        ?>
        <br/>
        <a href="ex4.php">Logout</a>
        <footer>
            Created by Charles Smith &ltcas275@pitt.edu&gt for CS 1520 spring 2016
        </footer>
    </body>
</html>