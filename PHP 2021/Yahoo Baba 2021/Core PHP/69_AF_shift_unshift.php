<h1>array_shift()</h1>
<?php
$ani=array("Krishna","Aniruddh","Raj","Mr.j","Nik's","Parv","Jay","Viral","Divyesh","Pathu");

array_shift($ani);
echo "<pre>";
print_r($ani);
echo "</pre>";
?>

<hr><h1>array_unshift()</h1>
<?php
$ani=array("Krishna","Aniruddh","Raj","Mr.j","Nik's","Parv","Jay","Viral","Divyesh","Pathu");

array_unshift($ani,"Coding Ninja","mr.Coding Cool");
echo "<pre>";
print_r($ani);
echo "</pre>";
?>