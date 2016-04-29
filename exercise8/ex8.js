/**
 * Created by cas275 on 4/29/16.
 */

$(document).ready(function(){
  $("#start").click(function(){
    getQuiz();
    $("#start").hide();
  });


});

function getQuiz(){
  $.post("getData.php",
    {
      file: "data.xml"
    },
    function(data,status){
      displayQuiz(data);
    });
}

function displayQuiz(data){
  $(data).find("problem").each(function(){
    var question = $(this).find("question").text();

    $("#quiz").append("<h3>"+question+"</h3>");
    var correct = $(this).find("correct").text();

    $(this).find("answer").each(function(){
      var id;
      if($(this).text()==correct){
        id = "answer";
      }
      else{
        id = "not";
      }
      $("#quiz").append("<input type='radio' value='"+$(this).text() +"' name='"+ question +"' class='"+id+"'>"+$(this).text()+"</input>");
    });

  });
  $(".not").click(function(){
    var total = 0;
    var correct = 0;
    $(".answer").each(function(){
      total++;
      if($(this).is(":checked")){
        correct++;
      }
    });
    $("#score").html(correct + " out of " + total+ " correct");
  });
  $(".answer").click(function(){
    var total = 0;
    var correct = 0;
    $(".answer").each(function(){
      total++;
      if($(this).is(":checked")){
        correct++;
      }
    });
    $("#score").html(correct + " out of " + total+ " correct");
    if(correct == total){
      alert("good job! 100% A+")
    }
  });
}

