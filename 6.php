<?php
echo "yuvraj dahiya<br>";
$cars = array("Lamborgini", "Audi", "Toyota");
sort($cars);
print_r($cars);
echo "<br>";
$numbers = array(15, 10, 90, 22, 11);
rsort($numbers);
print_r($numbers);
echo "<br>";
$age = array("sorabh" => "15", "Siddhant" => "37", "Vansh" => "13");
asort($age);
print_r($age);
echo "<br>";
$age = array("Raghav" => "25", "Aman" => "7", "Naman" => "36");
ksort($age);
print_r($age);
echo "<br>";
$age = array("Jasnoor" => "19", "Naman" => "18", "Upanshu" => "43");
arsort($age);
print_r($age);
echo "<br>";
$age = array("Amit" => "21", "Nikhil" => "38", "Deepanshu" => "17");
krsort($age);
print_r($age);
echo "<br>";
?>