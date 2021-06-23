<?php
$con=mysqli_connect("localhost","root","","anidb");
if($con)
{
	echo "Connection data base";
}
else
{
	echo "Not connection";
}
?>