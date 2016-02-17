<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 2/10/16
 * Time: 6:12 PM
 */
session_start();
unset($_SESSION["name"])
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin: 2%;
            }
            input{
                margin:  .25em;

            }
            form{
                text-align: center;
            }
            .error{
                color: red;
                font-size: 14pt;
                text-align: center;
                border-style: solid;
                border-color: red;
                border-radius: 10px;
            }
            header{
                background-color: blue;
                text-align: center;
                color: white;
                padding: .25em;
                border-radius: 10px;
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
        <!--super awesome banner/heading/thing goes here -->
        <header>
            <h1>Login Page</h1>
        </header>
        <?php
            if(isset($_SESSION["error"])){
                echo $_SESSION["error"];
            }
            else{
                //echo "error not set <br/>";
                //echo @$_SESSION["error"];
                //echo @$_SESSION["name"];
            }
        ?>

        <form method="post" action="process.php">
            Name:<br/>
            <input type="text" name="name"/>
            <br/>
            Password:<br/>
            <input type="password" name="password"/>
            <br/>
            <input type="submit" value="login"/>
            <a href="">Need an account?</a>
        </form>
        <footer>
            Created by Charles Smith &ltcas275@pitt.edu&gt for CS 1520 spring 2016
        </footer>
    </body>
</html>
