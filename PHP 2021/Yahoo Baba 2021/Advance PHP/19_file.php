<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="img"><br><br>
	<input type="submit" name=""><hr>
</form>
<?php
if(isset($_FILES['img']))
{
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";

	echo $n=$_FILES['img']['name'];
	echo $tn=$_FILES['img']['tmp_name'];

	move_uploaded_file($tn,"up_file/".$n);

	echo "Data Uploaded.....";

}
?>