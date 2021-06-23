<form action="" method="POST">
	<input type="text" name="uid" placeholder="Enter UID"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="password" name="psw" placeholder="Enter password"><br><br>
	<input type="submit" name="sb" value="POST"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	echo "<h1>";
	echo "<font color=red>";
	echo $_POST['uid'];
	echo "<br>";
	echo $_POST['nm
	echo "<br>";
	echo $_POST['no'];
	echo "<br>";
	echo $_POST['psw'];
	echo "</font>";
	echo "</h1>";

}
?>