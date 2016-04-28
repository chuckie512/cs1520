<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Panther Swim Club</title>
  <link rel="stylesheet" type="text/css" href="psc_style.css">
</head>
<body>
  <div class="back">
    <a href="pictures.php">Back</a>
  </div>

  <div>
    <div id="pic_back">
      <p>&#x25C0;</p>
    </div>

    <?php
    if(isset($_GET["pic"])){
      $pic = $_GET["pic"];
    }
    else{
      $pic = "oops.png";
    }
    echo "<img src=pics/".$pic." class=team_pic />";
    ?>

    <div id="pic_forward">
      <p>&#9654;</p>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="scripts/photoscript.js" ></script>
</body>
</html>
