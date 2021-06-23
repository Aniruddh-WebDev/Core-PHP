<?php
$con=mysqli_connect("localhost","root","");
mysqli_query($con,"create database newdb");

echo "Database create";
?>