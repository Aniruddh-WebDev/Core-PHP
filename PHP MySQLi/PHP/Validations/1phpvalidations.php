<form method="post">
	<input type="text" name="nm" placeholder="Enter Your Name"><br><br>
	<input type="text" name="mo" placeholder="Enter Your Number"><br><br>
	<input type="text" name="psw" placeholder="Enter Password"><br><br>
	<input type="text" name="cpsw" placeholder="Enter Comfirm Password"><br><br>
	<input type="submit" name="sb" value="Next Page"><br><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$nm=$_POST['nm'];
	$mo=$_POST['mo'];
	$psw=$_POST['psw'];
	$cpsw=$_POST['cpsw'];

	if(empty($nm))
	{
		echo "Please Enter Your Name";
	}
	if(!preg_match("/^[a-zA-Z\s]+$/",$nm))
	{
		echo "Please Enter Only String";
	}
	if(!preg_match("/^[0-9]*$/",$mo))
	{
		echo "Please enter number Only";
	}
	if(strlen($mo)<10)
	{
		echo "Please Enter proper Mobile";
	}
	if(strlen($mo)>10)
	{
		echo "Please Enter 10 digit number";
	}
	if($psw != $cpsw)
	{
		echo "Both Password are not Matched";
	}
	echo "<h1><font color='red'>".$nm."</font><br>";
	echo "<font color='green'>".$mo."</font><br>";
	echo "<font color='yellow'>".$psw."</font></h1>";
}
?>