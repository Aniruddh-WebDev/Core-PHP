<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="data"><br><br>
	<input type="submit" name=""><hr>
</form>
<?php
if(isset($_FILES['data']))
{
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	echo "<hr>";

	$file_name=$_FILES['data']['name'];
	$file_tmp=$_FILES['data']['tmp_name'];

	move_uploaded_file($file_tmp,"up_file_data/".$file_name);

	echo "<font color='red'><h1> Data File Uploaded.....</h1></font>";
}
?>