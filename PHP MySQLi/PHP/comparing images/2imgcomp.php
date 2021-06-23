//Error this program

<form action="" method="post" enctype="multipart/form-data">
	Choose IMG 1:&nbsp;<input type="file" name="f1">
	<h1>VS</h1>
	Choose IMG 2:&nbsp;<input type="file" name="f2">
	<input type="submit" name="sb" value="COMPARING"><br><br>
	<hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$imga=$_POST['f1'];
	$imgb=$_POST['f2'];

	$a=md5(file_get_contents($imga));
	$b=md5(file_get_contents($imgb));

if($a==$b)
{
	echo "Same as.....";
}
else
{
	echo "Please Try Another";
}
}
?>
