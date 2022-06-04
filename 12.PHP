<?php
session_start();
$_SESSION["login"]="successful"; 
echo"session start";
if(isset($_SESSION["login"]));
{
echo" successful";
}
session_destroy();
?>