<?php
$a=array("Aniruddh","Coding Ninja","Arpan","Royal Raja","Raj","Rk");
?>
<hr>
<?php
foreach($a as $b)
{
	echo $b."<br>";
}
?>
<hr>
<?php
foreach($a as $b =>$c)
{
	echo $b." ".$c."<br>";
}
?>