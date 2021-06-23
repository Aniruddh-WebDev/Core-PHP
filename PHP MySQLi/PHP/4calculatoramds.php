<form action="" method="post">
	<input type="number" name="no1" placeholder="Enter number 1"><br><br>
	<input type="number" name="no2" placeholder="Enter number 2"><br><br>
	<input type="submit" name="a" value="ADD +">
	<input type="submit" name="m" value="MUL *">
	<input type="submit" name="d" value="DIV /">
	<input type="submit" name="s" value="SUB -">
	<br><hr>
</form>
<?php
if(isset($_POST['a']))
{
	$n1=$_POST['no1'];
	$n2=$_POST['no2'];
	$add=$n1+$n2;

	echo "ADD IS->&nbsp;".$add;
}

if(isset($_POST['m']))
{
	$n1=$_POST['no1'];
	$n2=$_POST['no2'];
	$mul=$n1*$n2;

	echo "MUL IS->&nbsp;".$mul;
}

if(isset($_POST['d']))
{
	$n1=$_POST['no1'];
	$n2=$_POST['no2'];
	$div=$n1/$n2;

	echo "DIV IS->&nbsp;".$div;
}

if(isset($_POST['s']))
{
	$n1=$_POST['no1'];
	$n2=$_POST['no2'];
	$sub=$n1-$n2;

	echo "SUB IS->&nbsp;".$sub;
	
}
?>