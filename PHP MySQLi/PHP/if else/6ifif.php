<form action="" method="post">
	<input type="nuber" name="no" placeholder="Enter Number">
	<br>
	<input type="submit" name="sb"><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];

	if(18<$a)
	{
		echo "Moti value";
	}
	if(18>$a)
	{
		echo "Nani value";
	}
	if(18==$a)
	{
		echo "Sem value";
	}
}
?>