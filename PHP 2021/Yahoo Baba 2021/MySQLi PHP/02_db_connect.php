<?php
$h="localhost";
$u="root";
$p="";

$con=mysqli_connect($h,$u,$p,"anidb");
if($con)
{
	echo "Data Connect";
}
else
{
	echo "Not Connect";
}
?>