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
			echo $i." ";
		}
		echo "<br>";
	}
}
?>	
<!--
0
1 1
2 2 2
3 3 3 3
4 4 4 4 4
5 5 5 5 5 5
-->