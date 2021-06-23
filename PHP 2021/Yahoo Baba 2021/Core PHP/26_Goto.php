<?php
for($i=1; $i<=10; $i++)
{
	echo $i."<br>";
	if($i==5)
	{
		goto aniruddh;
	}
}

aniruddh:
echo "<font color='red'><h1>Goto</h1></font>";
?>