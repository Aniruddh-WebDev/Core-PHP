<h1><font color="yellow">IF IF IF IF IF.....</font></h1><br><br>
<form action="" method="POST">
	<input type="number" name="no" placeholder="Enter Your Number"><br><br>
	<input type="submit" name="sb" value="if if if"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['no'];

	if($a<=18)
	{
		echo "Aniruddh";
	}
	if($a>=19)
	{
		echo "Arpan";
	}
	if($a==0)
	{
		echo "Enter Number";
	}
}
?>