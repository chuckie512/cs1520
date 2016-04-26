<?php
    date_default_timezone_set("America/New_York");
    //function inspired by http://stackoverflow.com/questions/654363/how-many-days-until-x-y-z-date
    function print_date($event_date){
        $today = time();
        $until = $event_date - $today;
        if($until < 0){
            echo "was on ".date("F d, Y", $event_date);
        }
        else if($until/60/60/24 > 14){
            echo "is on ".date("F d, Y", $event_date);;
        }
        else{
            echo "is in ".floor($until/60/60/24)." days on ".date("l",$event_date);
        }
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
    <div class="events">
        <h1>Events</h1>
        <ul>
            <li>
                Hemingway's Fundraiser
                <?php
                    $event_date = mktime(12, 0, 0, 3, 3, 2016, 0);
                    print_date($event_date);
                ?>
            </li>
            <li>
                5 Guys Fundraiser
                <?php
                    $event_date = mktime(12, 0, 0, 3, 15, 2016, 0);
                    print_date($event_date);
                ?>
            </li>
            <li>
                Relay for life meet
                <?php
                    $event_date = mktime(12, 0, 0, 3, 19, 2016, 0);
                    print_date($event_date);
                ?>
            </li>
            <li>
                Nationals Meet
                <?php
                    $event_date = mktime(12, 0, 0, 4, 1, 2016, 0);
                    print_date($event_date);
                ?>
            </li>
        </ul>
    </div>
</body>
</html>
