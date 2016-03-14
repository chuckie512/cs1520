<?php
    if(isset($_POST['name'])){
        $server_name = "127.0.0.1";
        $username = "root";
        $pass = "";
        $db = "swim";

        $conn = new mysqli($server_name,$username,$pass, $db);

        if($conn->connect_error){
            //echo "didn't work";
            die("error".$conn->connect_error);
        }

        $sql = "INSERT INTO swim (name, 50free, 100free, 200free, 500free, 50fly, 100fly, 50back, 100back, 50breast, 100breast, 100IM, 200IM)
VALUES ('".$_POST['name']."','N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a' )";
        $conn->query($sql);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pics</title>
    <link rel="stylesheet" type="text/css" href="psc_style.css">
</head>
<body>
    <?php include 'header.php'; ?>
    <form action="submit.php" method="post">
        <input type="text" value="Name" name="name">
        <input type="submit" value="add">
    </form>
    <?php
        if(isset($sql)){
            echo "swimmer added!";
        }
    ?>
</body>
</html>

