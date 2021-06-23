<?php
$c=mysqli_connect("localhost","root","","newdb");
mysqli_query($c,"drop table anidata");

echo "Drop Table";
?>