<form action="" method="post">
	<input type="text" name="id" placeholder="Enter Id"><br><br>
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<textarea name="add" placeholder="Add addrest"></textarea><br><br>
	<input type="submit" name="sb" value="Post Method"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['id'];
	$b=$_POST['nm'];
	$c=$_POST['add'];

	echo $a."<br>".$b."<br>".$c;
}
?>