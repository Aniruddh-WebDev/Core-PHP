<form action="" method="POST">
	<input type="text" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="While"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	$i=0;
	while($i<=$n)
	{
		echo $i++."<br>";
	}

}
?>