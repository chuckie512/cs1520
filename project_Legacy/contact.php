<?php
if(isset($_POST['name'])) {
    $server_name = "127.0.0.1";
    $username = "root";
    $pass = "";
    $db = "swim";

    $conn = new mysqli($server_name, $username, $pass, $db);

    if ($conn->connect_error) {
        //echo "didn't work";
        die("error" . $conn->connect_error);
    }

    $sql = "INSERT INTO contact (name, message) VALUES ('".$_POST['name']."', '".$_POST['message']."')";
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
    <h1>Contact</h1>
    <form action="contact.php" method="post">
        <input type="text" name="name" placeholder="email" maxlength="40">
        <br/>
        <input type="text" name="message" placeholder="message" maxlength="450" id="message">
        <br/>
        <input type="submit" value="submit">
    </form>
    <?php
        if(isset($sql)){
            echo "Submitted!";
        }
    ?>

</body>
</html>
