<form action="" method="post">
	<input type="text" name="nm" value=""><br><br>
	<input type="submit" name="sb" value="Lower"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['nm'];

	echo "Upper case is: ".strtoupper($n);
	echo "<br><br>";
	echo "Lower case is: ".strtolower($n);
}
?>