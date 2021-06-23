<h1>strtoupper();,&nbsp;strtolower();,&nbsp;ucfirst();,&nbsp;lcfirst();,&nbsp;ucwords();</h1><br>
<hr>
<form action="" method="post">
	<input type="text" name="nm" placeholder="Enter Name"><br><br>
	<input type="submit" name="sb" value="OK"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$a=$_POST['nm'];

	echo strtoupper($a)."<hr>";
	echo strtolower($a)."<hr>";
	echo ucfirst($a)."<hr>";
	echo lcfirst($a)."<hr>";
	echo ucwords($a)."<hr>";
}
?>