<?php
$imga="im1.jpg";
$imgb="im11.jpg";

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
?>