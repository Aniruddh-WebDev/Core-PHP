<form action="" method="post">
	<select name="ag">
		<option>Select Age</option>
		<option value="1">12-18</option>
		<option value="2">19-22</option>
		<option value="3">23-30</option>
		
	</select><br><br>
	<input type="submit" name="sb" value="GO">
</form>
<?php
if(isset($_POST['sb']))
{
	$n=$_POST['ag'];

	switch($n)
	{
		case 1:
		echo header("location://facebook.com");
		break;

		case 2:
		echo header("location://linkedin.com");
		break;

		case 3:
		echo header("location://aniruddh.home.blog");
		break;

	}
	echo "Select Your Age";
}
?>