<?php
echo "array function";
echo "<br>";
$color=array("red","yellow","white","blue","green");
$sl=array_slice($color,2,3,true);
print_r($sl);
?>