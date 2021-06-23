<?php
$a=array("aniruddh","raj","divyesh",123,987,"jay");
$b=array("Aniruddh",159,"jay","arpan",357);
$c=array("aniruddh","Divyeh","Viral","Parv","Nikunj","Raj","Jay","Harsh",7600526667,7048888184,7600209055,9033339598);
$d=array("aniruddh","Divyeh","Viral","Parv","Nikunj","Raj","Jay","Harsh",7600526667,7048888184,7600209055,9033339598,"Yash","Jaymin","Chirag");
$e=array("Aniruddh","Coding Ninja","Arpan","Royal Raja","Raj","Rk");

foreach($a as $x)
{
	echo $x." ";
}
echo "<hr>";
?>

<h1>var_dump()</h1><br>
<?php
var_dump($a);
echo "<hr>";
var_dump($b);
echo "<hr>";
var_dump($c);
echo "<hr>";
var_dump($d);
echo "<hr>";
var_dump($e);
?>