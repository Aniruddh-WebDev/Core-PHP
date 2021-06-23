<form action="" method="post">
	<input type="text" name="uid" placeholder="Enter UID"><br><br>
	<input type="password" name="psw" placeholder="Enter Password"><br><br>
	<input type="submit" name="sb" value="Log in"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$u=$_POST['uid'];
	$p=$_POST['psw'];

	if($u=="aniruddh" && $p=="123456789")
	{
		echo "Welcome to Ninja programming";
	}
	else if($u=="arpan" && $p=="987654321")
	{
		echo "Welcome to ap programming";
	}
	else
	{
		echo "Enter User id and Password";
	}
	
} 
?>