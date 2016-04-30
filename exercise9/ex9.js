/**
 * Created by cas275 on 4/29/16.
 */

var words = [];


$(document).ready(function(){

  $("#button").click(function(){
    getWord();
  });

});

function getWord(){
  $.get("getWords.php", function(data){
    var word = $(data).find("value").text();

    var i = 0;
    var found = false;
    for(i=0; i<words.length; i++){
      if(words[i].name == word){
        words[i].val++;
        found = true;
      }
    }
    if(!found){
      words.push({
        name: word,
        val: 1
      });

    }
    updateTable();
  });




}

function updateTable(){

  var tableString = "";
  var j = 0;

  for(j=0; j<words.length; j++){
    tableString += " <tr> <td>" + words[j].name + "</td><td>"+words[j].val+"</td></tr> ";
    
  }
  $(".thetable").html(tableString);

}