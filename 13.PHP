<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="GET"> 
NAME:<input type="text" name="name">
Rollno: <Input type="text" name="rollno">
<input type="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_GET['submit']))
{
echo $_GET['name'];
echo $_GET['rollno'];
}
?>