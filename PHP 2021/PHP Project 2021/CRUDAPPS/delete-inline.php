<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","crud");
mysqli_query($con,"delete from student where sid='$id'");

header("location:index.php");



?>