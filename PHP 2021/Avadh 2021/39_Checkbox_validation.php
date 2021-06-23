<form action="" method="post">
	<input type="checkbox" name="c">Terms & Conditions<br>
	<input type="submit" name="sb" value="Confirm">
	<br>
</form>
<?php
if(isset($_POST['sb']))
{
	if(!isset($_POST['c']))
	{
		echo "Please Click on Terms & Conditions Then Confirm";
	}
	else
	{
		echo "Success";
	}
}
?>