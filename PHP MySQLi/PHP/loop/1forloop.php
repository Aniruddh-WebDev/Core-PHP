<form action="" method="post">
	<input type="text" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="Loop"><br><br><hr>
	
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];

	for($i=1;$i<=$a;$i++)
	{
		echo $i." <br>";
	}
}
?>