<form action="" method="post">
	<input type="text" name="data" placeholder="Enter Value"><br><br>
	<input type="submit" name="sb" value="ForLoop"><br><hr>
</form>
<font color="green"><h1>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['data'];
	for($i=1; $i<=10; $i++)
	{
		echo $n."<br>";
		
		
	}
}
?>
</h1></font>