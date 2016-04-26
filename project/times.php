<?php
$server_name = "127.0.0.1";
$username = "root";
$pass = "";
$db = "swim";

$conn = new mysqli($server_name,$username,$pass, $db);

if($conn->connect_error){
  //echo "didn't work";
  die("error".$conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>times</title>
  <link rel="stylesheet" type="text/css" href="psc_style.css">
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="select_swimmer">
    <form method="post" action="times.php">
      <select name="name">
        <option value="all">Show all</option>

        <?php
        $sql = "SELECT name FROM swim";
        $result = $conn->query($sql);
        if($result->num_rows>0){
          while($row = $result->fetch_assoc()){
            echo "<option value ='".$row['name']."'> ".$row['name']."</option>";
          }
        }
        ?>
      </select>
      <input type="submit" value="get times">
    </form>
  </div>
  <div class="results">
    <table>
      <tr>
        <td>Name</td>
        <td>50 free</td>
        <td>100 free</td>
        <td>200 free</td>
        <td>500 free</td>
        <td>50 fly</td>
        <td>100 fly</td>
        <td>50 back</td>
        <td>100 back</td>
        <td>50 breast</td>
        <td>100 breast</td>
        <td>100 IM</td>
        <td>200 IM</td>
      </tr>
      <?php
      if(isset($_POST['name'])){

        if($_POST['name']=="all"){
          $sql = "SELECT * FROM swim";
        }
        else{
          $sql = "SELECT * FROM swim WHERE name = '".$_POST['name']."'";
        }
        $result = $conn->query($sql);
        //echo $conn->error;
        if($result->num_rows > 0) {
          while ( $row = $result->fetch_assoc()) {
            echo "<tr>
                      <td>" . $row['name'] . "</td>
                      <td>" . $row['50free'] . "</td>
                      <td>" . $row['100free'] . "</td>
                      <td>" . $row['200free'] . "</td>
                      <td>" . $row['500free'] . "</td>
                      <td>" . $row['50fly'] . "</td>
                      <td>" . $row['100fly'] . "</td>
                      <td>" . $row['50back'] . "</td>
                      <td>" . $row['100back'] . "</td>
                      <td>" . $row['50breast'] . "</td>
                      <td>" . $row['100breast'] . "</td>
                      <td>" . $row['100IM'] . "</td>
                      <td>" . $row['200IM'] . "</td>
                  </tr>";
          }
        }

      }

      ?>
    </table>
  </div>
  <div>
    <br/>
    <a href="submit.php">Add another swimmer</a>
  </div>
</body>
</html>
