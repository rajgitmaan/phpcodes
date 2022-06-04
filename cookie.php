<?php
$cookie_name="raj";
$cookie_value="google";

setcookie($cookie_name, $cookie_value, time()+(86400),"/");
echo"cookie is set";
?>
<html>
<body>
<?php
if(!isset($_cookie[$cookie_name]))
{
echo"cookie is not set";
}
else
	echo$_cookie[$_cookie_name];
?>
</body>
</html>