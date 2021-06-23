<form action="" method="post">
	<input type="number" name="no" placeholder="Enter Number"><br><br>
	<input type="submit" name="sb" value="For Loop"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$even=0;
	$odd=0;
	$n=$_POST['no'];
	for($i=0; $i<=$n; $i++)
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
	echo "Sum even is: ".$even;
	echo "<br>";
	echo "Sum odd is: ".$odd;
}
?>