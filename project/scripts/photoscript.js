/**
 * Created by cas275 on 4/26/16.
 */

$(document).ready(function(){
    var pic_arr = ["fair_pic.jpg", "team_pic.jpg", "team_pic_2.jpg", "team_pic_3.jpg", "team_pic_4.jpg"];

    //console.log(pic_arr);
    var index = 0;
    $("#pic_back").click(function(){
        //console.log("click");
        index--;
        if(index<0)
            index=pic_arr.length-1;
        $(".team_pic").attr("src","pics/"+pic_arr[index]);
    });
    $("#pic_forward").click(function(){
        index++;
        if(index>=pic_arr.length)
            index=0;
        $(".team_pic").attr("src","pics/"+pic_arr[index]);
        //console.log("clack");
    });
}
);