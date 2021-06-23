<form action="" method="post">
	<input type="number" name="no" placeholder="Enter number"><br><br>
	<input type="submit" name="sb" value="For Loop">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['no'];

	for($i=0;$i<=$n;$i++)
	{
		for($j=0;$j<=$i;$j++)
		{
			echo $j." ";
		}
		echo "<br>";
	}
}
?>
<!--
0
0 1
0 1 2
0 1 2 3
0 1 2 3 4
0 1 2 3 4 5
-->	