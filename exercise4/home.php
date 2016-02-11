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
        </style>
    </head>
    <body>
        <?php
            echo "Welcome, ".$name;
        ?>
    </body>
</html>