<form action="" method="post">
	<input type="text" name="no" placeholder="Enter number"><br><br>
	<input type="submit" name="sb" value="For Loop">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$num = 65;
	$n=$_POST['no'];

	for($i=0;$i<=$n;$i++)
	{
		for ($j=0; $j<=$i; $j++)
		{ 
		echo chr($num)." ";
		}
		
		$num = $num+1;
		echo "<br>"; 
	}
}
?>
<!--
A
B B
C C C
D D D D
E E E E E
F F F F F F
-->