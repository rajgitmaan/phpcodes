<?php
$cookie_name="raj";
$cookie_value="google";
setcookie("cookie","",time()-(86400),"/");
?>
<html>
<body>
	<h2>JavaScript Confirm Box</h2>


<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>
	<form action=<?php echo $_SERVER['PHP_SELF']?> method= POST>
name:<input type ="text" name="name"><br>
e-mail:<input type="text" name="email"><br>
<input type ="submit" name="submit">
</form>
</body>
</html>
if(isset($_POST['submit']))
{
	echo$_POST['name'];
	echo$_POST['email'];

}
if(isset($_cookie[$cookie_name]))
{
	echo"cookie is not set";
}
else
{
	echo"cookie is set";
	
}
?>
</body>
</html>