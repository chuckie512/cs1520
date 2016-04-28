/**
 * Created by cas275 on 4/26/16.
 *
 * this is the script to switch between photos when the div #pic_back and #pic_forward are clicked
 * add more photos by modifying the array pic_arr to included the additional photos
 * These photos should be kept in the 'pics' directory under the root directory
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