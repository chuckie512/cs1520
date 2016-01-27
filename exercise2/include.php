<?php
/**
 * Created by PhpStorm.
 * User: cas275
 * Date: 1/27/16
 * Time: 6:07 PM
 */

echo "<h1>this is in include</h1>";

echo "<h1>3 variables </h1><br/>";
$a=5;
$b=7.5;
$c = $a + $b;
echo "<br/>";
echo $a." + ".$b." = ";
echo $c;
echo "<br/>";

echo "<h1> array </h1><br/>";
$arr = array();
$arr[] = $a;
$arr[] = $b;
$arr[] = $c;

foreach ($arr as $key => $val){
    echo $val;
    echo "<br/>";
}


echo "<h1> Server var values </h1> <br/>";
foreach ($_SERVER as $key => $val){
    echo $val."<br/>";
}


echo "<br/><br/>";
echo "<h1> conditional </h1> <br/>";
$r = rand(0,1);
if($r==0){
    echo "something";
}
else{
    echo "something else";
}
?>