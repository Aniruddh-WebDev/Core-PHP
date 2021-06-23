<?php
$id=$_POST['sid'];
$sn=$_POST['sname'];
$sa=$_POST['saddress'];
$sc=$_POST['sclass'];
$sp=$_POST['sphone'];




$con=mysqli_connect("localhost","root","","crud");
mysqli_query($con,"update student set sname='$sn',saddress='$sa',sclass='$sc',sphone='$sp' where sid='$id'");



header("location:index.php");

mysqli_close($con);
?>