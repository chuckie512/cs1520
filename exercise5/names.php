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
    if($fname==""||$lname==""){
        $error = "<p class='error'>Please enter your first and last name.</p>";
        unset($fname);
        unset($lname);
    }
}

?>
<html>
<head>
    <style>
        .error{
            border-color: red;
            border-radius: 10px;
            color: red;
            text-align: center;
            border-style: solid;
            padding: 4px;
        }
        .result{
            color: blue;
            border-color: blue;
            border-radius: 10px;
            text-align: center;
            border-style: solid;
            padding: 4px;
        }
        form{
            text-align: center;
        }
        body{
            padding: 2%;
        }
        header{
            background-color: blue;
            color: white;
            border-radius: 10px;
            text-align: center;
            font-size: 24pt;
            padding: 0.25em;
        }
        .entries{
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <!-- super awesome header -->
    <p>
        <b>Sign ups!</b>
    </p>
</header>

<?php
    if(isset($error)){
        echo $error;
    }
?>

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
            echo "<p class='error'>Something is wrong, please contact the site admin</p>";
        }


    }
?>

<form method="post" action="names.php">
    First Name:
    <br/>
    <input type="text" name="FName" maxlength="30" title="First name"/>
    <br/>
    Last Name:
    <br/>
    <input type="text" name="LName" maxlength="30" title="Last name"/>
    <br/>
    <input type="submit" value="Sign up!"/>
    <br/>
</form>

<?php
    if(isset($fname)) {
        $sql = "SELECT * FROM people";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            echo "<p class='entries'>";
            echo "Current Entries: <br/>";
            while ($row = $result->fetch_assoc()) {
                echo $row['FName'] . " " . $row['LName'] . "<br/>";
            }
            echo "</p>";
        }
    }
?>

</body>
</html>
