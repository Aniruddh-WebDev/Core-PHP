<?php
function niks($a,$b,$c,$d){
	$sum=$a+$b+$c+$d;
	return $sum;
}
function per($total){
	$p=$total/4;
	echo $p;
}

$add=niks(90,80,65,65);
echo per($add);





?>