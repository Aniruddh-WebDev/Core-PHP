<h1><?php
$pre=32;

if($pre >= 80 && $pre <= 100)
{
	echo "A";
}
elseif($pre >= 60 && $pre <= 80)
{
	echo "B";
}
elseif($pre >= 33 && $pre <= 60)
{
	echo "C";
} 
elseif($pre < 33)
{
	echo "D";
}
else
{
	echo "Enter Pre.....";
}
	

?>
</h1>