<html>
<head>
	<title>login page</title>
</head>
<body>
<form actions "get1.php" method = post> 
<table align="center"> 
<th colspan="2">
<h2> align="center">Login</h2>
</th>
</tr>
<tr>

<td>Username:</td>
<td><input type="text" name="name"></td>
</tr>

<td>Password:</td>
<td><input type="password" na value="1234"></td>
</tr>
<tr>

<td>Reset Password:</td>
<td><input type="reset" name="res"></td>
</tr>

<tr>

<td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
session_start();

if(isset($_SESSION['uname']))
{
	session_destroy();
	echo "<script> location.href='login.php'</script>";
}
else
{
	echo "<script> location.href='login.php'</script>";
}
?>