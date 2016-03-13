<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 3/12/16
 * Time: 6:50 PM
 */

$server_name = "127.0.0.1";
$username = "root";
$pass = "";
$db = "swim";

$conn = new mysqli($server_name,$username,$pass, $db);

if($conn->connect_error){
    //echo "didn't work";
    die("error".$conn->connect_error);
}
else{
    echo "connected <br/>";
}

//w3schools helped a little bit on this part

$sql = "CREATE TABLE swim(
name VARCHAR(36) NOT NULL,
50free VARCHAR(36) NOT NULL,
100free VARCHAR(36) NOT NULL,
200free VARCHAR(36) NOT NULL,
500free VARCHAR(36) NOT NULL,
50fly VARCHAR(36) NOT NULL,
100fly VARCHAR(36) NOT NULL,
50back VARCHAR(36) NOT NULL,
100back VARCHAR(36) NOT NULL,
50breast VARCHAR(36) NOT NULL,
100breast VARCHAR(36) NOT NULL,
100IM VARCHAR(36) NOT NULL,
200IM VARCHAR(36) NOT NULL

)";

if($conn->query($sql) === true){
    echo "created table <br/>";
} else{
    echo "error creating ".$conn->error."<br/>";
}

$sql = "INSERT INTO swim (name, 50free, 100free, 200free, 500free, 50fly, 100fly, 50back, 100back, 50breast, 100breast, 100IM, 200IM)
VALUES ('Charles Smith','N/a', '1:05.53', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', '36.17', '1:17.46', 'N/a', 'N/a' )";
if($conn->query($sql)===true){
    echo"inserted <br/>";
}else{
    echo "error inserting ".$conn->error."<br/>";
}

$sql = "INSERT INTO swim (name, 50free, 100free, 200free, 500free, 50fly, 100fly, 50back, 100back, 50breast, 100breast, 100IM, 200IM)
VALUES ('Margaret Shuff','29.19', '1:03.38', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', '1:14.41', 'N/a' )";
if($conn->query($sql)===true){
    echo"inserted <br/>";
}else{
    echo "error inserting ".$conn->error."<br/>";
}

$sql = "INSERT INTO swim (name, 50free, 100free, 200free, 500free, 50fly, 100fly, 50back, 100back, 50breast, 100breast, 100IM, 200IM)
VALUES ('Aaron Tamanne','N/a', 'N/a', '2:28.81', 'N/a', 'N/a', 'N/a', 'N/a', 'N/a', '36.17', 'N/a', 'N/a', 'N/a' )";
if($conn->query($sql)===true){
    echo"inserted <br/>";
}else{
    echo "error inserting ".$conn->error."<br/>";
}
$conn->close();
echo "<br/>connection closed";