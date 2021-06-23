<?php
$a=mysqli_connect("localhost","root","","newdb");
mysqli_query($a,"create table kadadata(id int(10),name varchar(50),mobile bigint(12),email varchar(100))");

echo "Create Table";
?>