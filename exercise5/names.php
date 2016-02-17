<!DOCTYPE html>
<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 2/17/16
 * Time: 6:16 PM
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
if(isset($_POST["FName"])&&isset($_POST["LName"])){
    $fname = $_POST["FName"];
    $lname = $_POST["LName"];
    $fname = trim($fname);
    $lname = trim($lname);
    $fname = preg_replace('/[^A-Za-z0-9\-]/', '', $fname);
    $lname = preg_replace('/[^A-Za-z0-9\-]/', '', $lname);
}

?>
<html>
<head>

</head>
<body>
<header>
    <!-- super awesome header -->
    <style>
        .error{
            border-color: red;
            border-radius: 10px;
            color: red;
            text-align: center;
        }
        .result{
            color: blue;
            border-color: blue;
            border-radius: 10px;
            text-align: center;
        }
        form{
            text-align: center;
        }
        body{
            padding: 2%;
        }
    </style>
</header>

<?php
    if(isset($fname)){
        $sql = "SELECT * FROM people WHERE FName = '".$fname."' AND LName = '".$lname."'";
        //echo "$sql";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            //user in DB
            echo "<p class='result'> You're already on the list, ".$fname." ".$lname."</p>";
        } elseif($result->num_rows == 0){
            //user not in DB
            $sql = "INSERT INTO people (LName, FName) VALUES ('".$lname."', '".$fname."')";
            $result = $conn->query($sql);
            echo "<p class='result'>You've been added to the list</p>";
        } else{
            //duplicate in DB, this shouldn't happen
            echo "<p class='error'>something is wrong</p>";
        }

        //show everything

    }
?>
<form method="post" action="names.php">
    First Name:
    <br/>
    <input type="text" name ="FName" maxlength="30"/>
    <br/>
    Last Name:
    <br/>
    <input type="text" name="LName" maxlength="30"/>
    <br/>
    <input type="submit" />
    <br/>
</form>
</body>
</html>
