<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']?> method="POST"> 
NAME:<input type="text" name="name"> 
Rollno:<Input type="text" name="rollno">
<input type="submit" namee="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
echo $_POST ['name'];
echo $_POST ['rollno'];
}
?>