<?php
$sn=$_POST['sname'];
$sa=$_POST['saddress'];
$sc=$_POST['class'];
$sp=$_POST['sphone'];

/*$con=mysqli_connect("localhost","root","","crud");
$sql="insert into student(sname,saddress,sclass,sphone)values('{$sn}','{$sa}','{$sc}','{$sp}')";

$result=mysqli_query($con, $sql);

header("location:index.php");

mysqli_close($con);*/


$con=mysqli_connect("localhost","root","","crud");
mysqli_query($con,"insert into student(sname,saddress,sclass,sphone)value('$sn','$sa','$sc','$sp')");



header("location:index.php");

mysqli_close($con);
?>