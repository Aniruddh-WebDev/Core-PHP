<h1>Switch</h1><br>
<form action="" method="post">
	<select name="ag">
		<option>Select Age</option>
		<option value="1">12-17</option>
		<option value="2">18-20</option>
		<option value="3">21-14</option>
		<option value="4">25-30</option>
	</select>
	<input type="submit" name="sb" value="Go"><br><br> 
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['ag'];

	switch($a)
	{

		

		case 1:
		echo header("location://aniruddh.home.blog");
		break;

		case 2:
		echo header("location://facebook.com");
		break;

		case 3:
		echo header("location://linkedin.com");
		break;

		case 4:
		echo header("location://filehippo.com");
		break;

	}
	echo "Select Age";
}
?>