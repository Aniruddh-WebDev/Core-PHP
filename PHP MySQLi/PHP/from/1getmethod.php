<form method="get">
	<input type="text" name="nm" placeholder="Enter name"><br><br>
	<input type="text" name="no" placeholder="Enter Number"><br><br>
	<input type="text" name="nn" placeholder="Enter Nick name"><br><br>

	<input type="submit" name="sb"  value="GET"><br>
	<hr>
</form>
<?php
if(isset($_GET['sb']))
{
	$a=$_GET['nm'];
	$b=$_GET['no'];
	$c=$_GET['nn'];

	echo $a.$b.$c;
}
?>