<form accept="" method="post">
	<input type="text" name="nm" placeholder="Enter Your Name"><br><br>
	<input type="text" name="mo" placeholder="Enter Your Number"><br><br>
	<input type="password" name="p" placeholder="Enter Your Password"><br><br>
	<input type="password" name="cp" placeholder="Enter Confirm Password"><br><br>
	<input type="submit" name="sb" value="Login"><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$n = $_POST['nm'];
	$m = $_POST['mo'];
	$p = $_POST['p'];
	$cp = $_POST['cp'];
	if(empty($n))
	{
		echo "Please Enter Your Name";
	}
	if(!preg_match("/^[a-zA-Z\s]+$/", $n))
	{
		echo "Please Enter Name As Only String";
	}
	if(!preg_match('/^[0-9]*$/',$m))
	{
		echo "Enter Only Number";
	}
	if(strlen($m)<10)
	{
		echo "Please Enter proper Mobile Number Here";
	}
	if(strlen($m)>10)
	{
		echo "Please Enter Only 10 Digit";
	}
	if($p != $cp)
	{
		echo "Please Same Password Enter";
	}
	echo $n." Login";
}
?>