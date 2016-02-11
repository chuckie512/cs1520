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
                padding: 2%;
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
            }
        </style>
    </head>
    <body>
        <!--super awesome banner/heading/thing goes here -->
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
    </body>
</html>
