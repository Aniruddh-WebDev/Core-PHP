<h1><font size="7" color="green">==</font></h1><h1>Password</h1>
<br>
<form action="" method="POST">
	<input type="text" name="u" placeholder="Enter User name"><br><br>
	<input type="text" name="p" placeholder="Enter Password"><br><br>
	<input type="Submit" name="sb" value="=="><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$u=$_POST['u'];
	$p=$_POST['p'];

	if($u == $p)
	{
		echo "Welcome";
	}
	else
	{
		echo "Not Entry";
	}
}
?>