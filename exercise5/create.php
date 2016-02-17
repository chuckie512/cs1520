<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 2/17/16
 * Time: 6:00 PM
 */

$server_name = "127.0.0.1";
$username = "root";
$pass = "";
$db = "exercises";

$conn = new mysqli($server_name,$username,$pass, $db);

if($conn->connect_error){
    //echo "didn't work";
    die("error".$conn->connect_error);
}
else{
    echo "connected <br/>";
}

//w3schools helped a little bit on this part

$sql = "CREATE TABLE people(
LName VARCHAR(36) NOT NULL,
FName VARCHAR(36) NOT NULL
)";

if($conn->query($sql) === true){
    echo "created table";
} else{
    echo "error creating ".$conn->error;
}
$conn->close();
echo "<br/>connection closed";