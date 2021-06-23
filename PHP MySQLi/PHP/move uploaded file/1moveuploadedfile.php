<form action="" method="post" enctype="multipart/form-data">
	<input type="file" name="fl" value=""><br><br>
	<input type="submit" name="sb" value="Uploaded"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$m="myfile/".$_FILES['fl']['name'];

	move_uploaded_file($_FILES['fl']['tmp_name'],$m);

	echo "Uploaded SuccessFully.....";
}
?>