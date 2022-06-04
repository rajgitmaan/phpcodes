<?php
form action="xyz.php" method = "post";
Name<inpit type="text" name ="name">
Rollno<input type="text name="ROLLNO">
<input type="submit" name="submit">
</form>
?>
<?php
if(isset($_post['save;]))
{
echo $_post['name;];
echo $_post['ROLLNO'];
}
?>