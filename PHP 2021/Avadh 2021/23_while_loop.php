<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="For Loop"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];
	$i=0;
	while($i<=$n)
		{
			echo $i." ";
			$i+=2;
		}
}
?>