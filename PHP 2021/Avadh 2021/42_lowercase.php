<form action="" method="post">
	<input type="text" name="nm" value=""><br><br>
	<input type="submit" name="sb" value="Lower"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['nm'];

	echo "String is: ".strtolower($n);
}
?>