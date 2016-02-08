<head>
    <style>
        body{
            background-color: gold;
            padding-top: 10%;
            color: blue;
            text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
            font-size: 2em;
            text-align: center;
            padding-left: 5%;
            padding-right: 5%;
        }

    </style>
</head>
<html>
<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 2/1/16
 * Time: 9:24 PM
 */
//read from post
$name = $_POST["name"];
$name = trim($name);

if($name=="Moo!"){
    echo "Cows aren't allowed to register!";

}
else {
    //echo "hello ".$name."<br/>";
    //open file of names
    $file = fopen("names.txt", "r+");
    //look for name
    $found = false;
    while (!feof($file)) { //loop to end of file
        $entry = fgets($file);
        $entry = trim($entry);//don't want any whitespace
        //echo "entry: ".$entry."<br/>";

        if (strtolower($entry) == strtolower($name)) {
            echo "You've already registered, " . $name . ".";
            $found = true;
            break;
        }
    }
    //add name if it doesn't exist
    if (!$found) {
        fwrite($file, $name . "\n");
        echo "Thanks for registering, " . $name . "!";
    }
}
?>
<br/>
<a href="ex3.html">go back</a>
</html>
