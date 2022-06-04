<?php
session_start();
$_session["login"]= "successful";
echo "session start";
print_r($_session);

if(isset($_session["login"]))
{
	echo $_session['login'];
}
?>