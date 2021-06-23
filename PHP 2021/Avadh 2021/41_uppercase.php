<form action="" method="post">
	<input type="text" name="nm" value=""><br><br>
	<input type="submit" name="sb" value="Uppercase"><hr>
</form>
<?php
if(isset($_POST['nm']))
{
	$n=$_POST['nm'];
	echo "String is: ".strtoupper($n);
}
?>