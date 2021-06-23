<form action="" method="post" enctype="multipart/form-data">
	Choose File&nbsp;<input type="file" name="fl"><br><br>

	Choose File Type:&nbsp;
	<select name="l">
		<option value="">Choose File</option>
		<option value="php">PHP</option>
		<option value="jsp">JSP</option>
		<option value="asp">ASP</option>
		<option value="c">C</option>
		<option value="c++">C++</option>
		<option value="java">JAVA</option>
		<option value="python">PYTHON</option>
	</select>
<br>
<input type="submit" name="sb" value="OK"><br><br>
</form>
<?php
if(isset($_POST['sb']))
{
	if(empty($_FILES['fl']['name']))
	{
		echo "Please Choose Your File<br>";
	}
	if($_POST['l']=="")
	{
		echo "Please Choose Your File types Here<br>";
	}
}
?>