<?php
$con=mysqli_connect("localhost","root","","newdb");
mysqli_query($con,"create table niksdata(id int,name varchar(50))");

echo "Table Create.....";
?>