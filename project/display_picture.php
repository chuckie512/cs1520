<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Panther Swim Club</title>
  <link rel="stylesheet" type="text/css" href="psc_style.css">
</head>
<body class="ahh">
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
</body>
</html>
