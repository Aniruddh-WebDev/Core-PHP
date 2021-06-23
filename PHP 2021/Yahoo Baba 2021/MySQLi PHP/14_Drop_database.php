<?php
$con=mysqli_connect("localhost","root","","newdb");
mysqli_query($con,"drop database newdb");

echo "Drop database";
?>