/**
 * Created by cas275 on 4/28/16.
 */
$(document).ready(function(){
  $("#show").click(function(){

    var data = localStorage.getItem("file1.txt");
    if(data==null){ //data not yet downloaded
      getData();
    }
    else{ //client already has data
      toggleDataDisplay();
    }
  });
});

function getData(){
  var xhttp = new XMLHttpRequest();
  $.post("getData.php",
    {
      file: "file1.txt"
    },
    function(data, status){
      localStorage.setItem("file1.txt",data);
      toggleDataDisplay();
    });
}

function toggleDataDisplay(){
  var text = localStorage.getItem("file1.txt");
  if($("#data").text() != text){
    $("#data").text(text);
  }
  $("#data").slideToggle(1000);
}