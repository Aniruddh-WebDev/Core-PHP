<form action="" method="post">
	<input type="text" name="ab" placeholder="Enter Your Name First Alphabat"><br><br>
	<input type="submit" name="sb" value="Switch Case"><hr>
</form>
<h1>
<?php
if(isset($_POST['sb']))
{
	$pr=$_POST['ab'];

	switch ($pr)
	{
		case 0:
		echo "Aniruddh";
		break;

		case 1:
		echo "Viral";
		break;

		case 3:
		echo "Parv";
		break;

		case 4:
		echo "Nikunj";
		break;

		case 5:
		echo "Jasmin";
		break;

		default:
		echo "No Data";
		break;
	}
}
?>
</h1>