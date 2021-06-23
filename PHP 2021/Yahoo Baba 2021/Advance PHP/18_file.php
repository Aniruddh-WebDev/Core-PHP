<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img" /><br><br>
<input type="submit" name="sb"/> 
	
</form>

<?php
if(isset($_FILES['img']))
{
	echo "<pre>";
	print_r($_FILES);
	echo "<pre>";

	$fn=$_FILES['img']['name'];
	$ft=$_FILES['img']['type']; 
	$ftn=$_FILES['img']['tmp_name'];
	$fs=$_FILES['img']['size'];

	move_uploaded_file($ftn,"img-up/".$fn);

}
?>