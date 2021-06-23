<form action="" method="post">
	<input type="number" name="no1" placeholder="Enter Number"><br><br>
	<input type="number" name="no2" placeholder="Enter Number"><br><br>
	<input type="submit" name="a" value="ADD">&nbsp;
	<input type="submit" name="s" value="SUB">&nbsp;
	<input type="submit" name="m" value="MUL">&nbsp;
	<input type="submit" name="d" value="DIV">&nbsp;
	<hr>
</form>
<h1>
<?php
if(isset($_POST['a']))
{
	$x=$_POST['no1'];
	$y=$_POST['no2'];
	$z=$x+$y;
	echo "<font color='#ff0066'>ADD IS: ".$z."</font>";
}
if(isset($_POST['s']))
{	
	$x=$_POST['no1'];
	$y=$_POST['no2'];
	$z=$x-$y;
	echo "<font color='#0000ff'>SUB IS: ".$z."</font>";
}
if(isset($_POST['m']))
{	
	$x=$_POST['no1'];
	$y=$_POST['no2'];
	$z=$x*$y;
	echo "<font color='#ffff00'>MUL IS: ".$z."</font>";
}		
if(isset($_POST['d']))
{	
	$x=$_POST['no1'];
	$y=$_POST['no2'];
	$z=$x/$y;
	echo "<font color='#00cc00'>DIV IS: ".$z."</font>";
}		
?>
</h1>