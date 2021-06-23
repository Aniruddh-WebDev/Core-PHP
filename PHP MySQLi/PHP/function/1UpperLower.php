<form method="post">
	<input type="text" name="nm" placeholder="Enter Value"><br><br>
	<input type="submit" name="sb" value="Upper & Lower">
</form>
<hr>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];

	echo "Your Name Is=>".strtoupper($a);
	echo "<br><br>";
	echo "Your Name Is=>".strtolower($a);
}	
?>