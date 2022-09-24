<?php
require  "greeting.php";
require "french.php";
require "german.php";
require "english.php";
require "animal.php";
require "cow.php";
require "lion.php";
function greeting($people ){

    foreach ($people as $person){
    echo $person-> greet();
    echo "<br>" ;
    }
}



$people =[
new English(), new German(),new French(),
];
greeting($people);

echo "<br>";


$An=new ani\cow ("gamoos","brsem");
$An->set_family("gamoos");
echo $An->get_family()."<br>";

$An->set_food("brsem");
echo $An->get_food();
echo "<br>";

$li=new ani\lion ("assad","meat");
$li->set_family("assad");
echo $li->get_family()."<br>";
$li->set_food("meat");
echo $li->get_food();