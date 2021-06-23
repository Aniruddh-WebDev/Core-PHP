<form>
	<input type="text" name="id" placeholder="Enter uid"><br><br>
	<input type="text" name="nm" placeholder="Enter name"><br><br>
	<input type="password" name="psw" placeholder="Enter password"><br><br>
	<input type="submit" name="sb" value="Get Method">
	<hr>
</form>
<?php
if(isset($_GET['sb']))
{
	$a=$_GET['id'];
	$b=$_GET['nm'];
	$c=$_GET['psw'];

	echo "<h1>".$a."&nbsp;".$b."&nbsp;".$c."</h1>";
}	
?>