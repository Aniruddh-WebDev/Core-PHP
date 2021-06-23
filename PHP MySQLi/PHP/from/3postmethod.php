<form action="" method="POST">
	<input type="text" name="unm" placeholder="Enter User Name"><br><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb" value="POST"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$x=$_POST['unm'];
	$y=$_POST['psw'];

	echo "<h1><font color='red'>".$x."<br>".$y."</font></h1>";

	echo "<font color='green'>Welcome &nbsp;".$x."&nbsp; Log in</font>";
}

?>