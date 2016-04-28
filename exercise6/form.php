<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CS class search</title>
  <style>
    body{
      text-align: center;
      background-color: lightblue;
      margin-top: 1%;
      margin-left: 5%;
      margin-right: 5%;
    }
    .result{
      border: solid blue 2px;
      border-radius: 5px;
      color red;
    }
    #search{
      border-radius: 25px;
      background-color: white;
      border: solid blue 2px;
      padding: 8px;
      margin: 5px;
    }
    #searchbox{
      margin-top: 8px;
      border: 2px solid blue;
    }
    .header{
      background-color: blue;
      color: white;
      border-radius: 5px;
      
    }
  </style>
</head>
<body>
<div class="header">
  <h1>Search for CS Classes</h1>
</div>

<?php
if(isset($_GET["classID"])){
  echo"<div class='result'>";
  echo "<p>search for ".$_GET["classID"]." accepted </p>";
  echo"</div>";
}

?>


<form action="form.php" method="get">
  <input type="text" placeholder="CSYXXX" id="searchbox" maxlength="6" name="classID">
  <br/>
  <input type="button" id="search" value="search">
</form>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
  $("#search").click(function(event){

    var input = $("#searchbox").val(); //get the user's input
    var valid=false;

    //input verification.
    if(input.length === 6 &&
      input.charAt(0).toLowerCase() === "c" &&
      input.charAt(1).toLowerCase() ==="s" &&
      input.charAt(2) >=0 && input.charAt(2)<= 3 &&
      input.charAt(3) >=0 && input.charAt(3)<=9 &&
      input.charAt(4) >=0 && input.charAt(4)<=9 &&
      input.charAt(5) >=0 && input.charAt(5)<=9 &&
      input.charAt(6) >=0 && input.charAt(6)<=9){
      valid = true;
    }
    if(valid == false){
      alert("That's not a valid CS class number");
      $("#searchbox").val("");
      $("#searchbox").focus();
    }
    else {
      $("form").submit();
    }

  });
  $(window).keydown(function(event){
    if(event.keyCode==13){
      event.preventDefault();
      //$("#search").click();  <-- this was removed, as it still submitted form after failure
      return false;
    }
  });

</script>
</body>
</html>