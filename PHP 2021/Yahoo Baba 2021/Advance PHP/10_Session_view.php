<?php
session_start();

print_r($_SESSION);

echo "Fovarite Color".$_SESSION["favcolor"];
?>