<form action="" method="post" enctype="multipart/form-data">
	Choose File:<input type="file" name="f"><br>
	Choose language:<br>
	<select name="1">
		<option value="">--- ---</option>
		<option value="php">PHP</option>
		<option value="asp">ASP</option>
		<option value="jsp">JSP</option>
	</select>
	<br>
	<input type="submit" name="sb" value="Validation">
	<br>
</form>
<?php
if(isset($_POST['sb']))
{
	if(empty($_FILES['f']['name']))
	{
		echo "Plese Choose Your File<br>";
	}
	if($_POST['1']=="")
	{
		echo "Plese Choose Your Language Here<br>";
	}
}
?>