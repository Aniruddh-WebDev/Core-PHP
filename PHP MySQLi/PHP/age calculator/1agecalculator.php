<?php
$dateofBirth = "18-09-1997";
$today = date("y-m-d");

$diff = date_diff(date_create($dateofBirth), date_create($today));

echo "Age is&nbsp;".$diff->format('%y');
?>