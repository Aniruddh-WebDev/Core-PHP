<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="ODD EVEN">
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$odd =0;
	$even =0;
	$n=$_POST['no'];

	for($i=1;$i<=$n;$i++)
	{
		if($i%2==0)
		{
			$even = $even+$i;
		}
		else
		{
			$odd = $odd+$i;
		}
	}
	echo "SUM OF EVEN NO IS:".$even;
	echo "<br>";
	echo "SUM OF ODD IS;".$odd;
}
?>