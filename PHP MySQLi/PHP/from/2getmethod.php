<form action="" method="get">
	<input type="text" name="uid" placeholder="Enter User Id"><br><br>
	<input type="nuber" name="mob" placeholder="Enter Mobile"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb" value="GET Method"><br><br>
	<hr>
</form>
<?php
if(isset($_GET['sb']))
{
	$a=$_GET['uid'];
	$b=$_GET['mob'];
	$c=$_GET['nm'];
	$d=$_GET['psw'];


	echo "<h1>".$a."</h1><br><br>";
	echo "<h1>".$b."</h1><br><br>";
	echo "<h1>".$c."</h1><br><br>";
	echo "<h1>".$d."</h1><br><br>";
}
?>