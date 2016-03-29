// The anonymous function below will fire on page load

// Some things to consider
// $.ajax(); to make your requests a little easier. Or the vanilla js way, it's up to you.
// $.on(); for event handling
// Remember, selecting elements in jQuery is like selecting them in CSS
// You'll probably have to manipulate some strings
// some jQuery functions to help display results
// $.show(), $.hide(), $.slideup(), $.slidedown(), $.fadein(), $.fadeout()
// Add content from requests with something like
// $.html(), $.text(), etc.
// keyup events could be helpful to get value of field as the user types

document.getElementById("search").addEventListener("submit", mysearch);


function magic() {
	// Magic!
	console.log('Keepin\'n it clean with an external script!');
    var xhttp = new XMLHttpRequest();
    var type = "all";
    xhttp.onreadystatechange = function(){
        var test = xhttp.responseText;
        test.trim();
        console.log(test);
        var response = JSON.parse(test);
        console.log(response);
        console.log(response.data.interests);

        var array = response.data.interests.concat(response.data.programming);
        //jquery auto-complete on the id=search
        $("#search").autocomplete({source: array})

    };
    xhttp.open("GET", "http://www.mattbowytz.com/simple_api.json?data=" + type, true);
    xhttp.send();
}


function mysearch(e){
    e.preventDefault();
    //alert("help!");
    var search = document.getElementById("search").value;
    console.log(search);
    //alert("2");
    window.location.replace("http://www.google.com/search?q=" + search);
    //alert("3");
}