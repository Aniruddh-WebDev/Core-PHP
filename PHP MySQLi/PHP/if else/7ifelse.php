<form action="" method="post">
	<input type="text" name="uid" placeholder="Enter User ID"><br><br>
	<input type="password" name="psw" placeholder="Enter password"><br><br>
	<input type="submit" name="sb" value="Log in"><br><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$u=$_POST['uid'];
	$p=$_POST['psw'];

	if($u=="aniruddh" || $p=="coding ninja")
	{
		echo "Welcome Coding Ninja";
	}
	if($u=="arpan" || $p=="royal raja")
	{
		echo "Welcome Arpan Patel";
	}
}
?>