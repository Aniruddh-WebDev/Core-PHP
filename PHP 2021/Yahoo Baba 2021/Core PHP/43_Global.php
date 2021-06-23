<?php
$a=10;
$b=5;

function ani(){
	global $a,$b;
	$a=$a+$b;
}
ani();
echo $a;

?>