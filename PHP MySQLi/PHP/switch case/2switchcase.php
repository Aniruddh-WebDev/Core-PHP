<h1>Swirch and Break</h1>
<form action="" method="post">
	<input type="text" name="ag" placeholder="Enter Age"><br><br>
	<input type="submit" name="sb" value="Go"><br>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['ag'];

	switch($a)
	{
		case 18:
		echo header("location://google.com");
		break;

		case 19:
		echo header("location://facebook.com");
		break;

		case 20:
		echo header("location://linkedin.com");
		break;
	}
}
?>