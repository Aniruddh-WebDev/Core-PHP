<form action="" method="post">
	<input type="text" name="nm" value=""><br><br>
	<input type="submit" name="sb" value="First char Capital"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['nm'];
	echo "First Character Capital: ".ucfirst($n);
}
?>