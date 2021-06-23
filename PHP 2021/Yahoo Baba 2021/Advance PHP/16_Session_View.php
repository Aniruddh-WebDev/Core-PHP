<?php
session_start();
echo "<font color='yellow'><h1>";
echo "Welcome to Login Mr.".$_SESSION["uid"];
echo "</font></h1>";
?>