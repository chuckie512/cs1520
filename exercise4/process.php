<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 2/10/16
 * Time: 6:35 PM
 */
session_start();
unset($_SESSION["error"]);
$name = $_POST["name"];
$name = trim($name);
$pass = $_POST["password"];
$pass = trim($pass);

if($name==""||$pass==""){
    $_SESSION["error"] = "<p class='error'>Please enter your name and password</p>";
    header('location: '.'ex4.php');
    die();
}

$file = fopen("users.txt", "r+");

while(!feof($file)){
    $entry = fgets($file);
    $userpass = split("\:",$entry);
    $userpass[0] = trim($userpass[0]);
    $userpass[1] = trim($userpass[1]);
    if(strtolower($userpass[0])==strtolower($name)&&$userpass[1]==$pass&&$name!=""){
        //user exists
        //session_start();
        $_SESSION["name"] = $name; //something up here... name isn't being set
        header('location: '.'home.php');
        die();
    }

}
$_SESSION["error"] = "<p class='error'>Error logging in.<br/> Try checking your username and password</p>";
header('location: '.'ex4.php');
die();