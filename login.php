<html>
<head>
<title>Facebook login page</title>
</head>
<body>
<form>
<li>Email id or Phone<br><input type="text" name="email"></li>
<li>Password<br><input type="password" name="password"><br><a href="">Forgotten account?</a></li>
<li><input type="submit" name="login" value="Log In"></li>
</form>
</body>
</html>

<?php
$_session["email"]="successful";
print_r($_session);
if(isset($_session["submit"]))
{
  echo $_session['submit'];
}
?>
<?php
if (isset($_POST['submit'])) {
  echo $_POST['fname'];
  echo "<br>";
  echo $_POST['lname'];
  echo "<br>";
  echo $_POST['DOB'];
  echo "<br>";
  echo $_POST['email-id'];
  echo "<br>";
  echo $_POST['phone'];
}
?>
<?php
session_destroy();
?>