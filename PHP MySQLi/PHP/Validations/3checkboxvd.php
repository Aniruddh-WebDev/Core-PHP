<form action="" method="post">
	<input type="checkbox" name="ck"> Terms & Condtions<br>
	<input type="submit" name="sb" value="OK"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	if(!isset($_POST['ck']))
	{
		echo "Please Click On Terms & Condtions Then Confirm";
	}
	else
	{
		echo "Success";
	}
}
?>
