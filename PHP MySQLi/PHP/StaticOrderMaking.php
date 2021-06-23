<form action="" method="post">
	<input type="checkbox" name="p" value="pizza">Pizza 150 Rs.<br>
	<input type="checkbox" name="b" value="burger">Burger 100 Rs.<br>
	<input type="submit" name="sb" value="Total"><br><hr>
</form>
<?php
if(isset($_POST['sb']))
{
	$total=0;
	$order="Your Menues:<br>";
	if(isset($_POST['p']))
	{
		$total +=150;
		$order=$order."Pizza 150 Rs.<br>";
	}
	if(isset($_POST['b']))
	{
		$total +=100;
		$order=$order."Burger 100 Rs.<br>";
	}
	echo "Your Order Detail is<br>";
	echo $order;
	echo "______________<br>";
	echo "Total Amount:".$total;
}
?>
