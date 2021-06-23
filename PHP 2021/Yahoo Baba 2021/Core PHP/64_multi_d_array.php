<?php
$jsk=array(
	array(1,"Krishna","Founder","Founder"),
	array(2,"Aniruddh","Full Stack Dev",250000),
	array(3,"Nikunj","Web Dev",250000),
	array(4,"Viral","Mobile App Dev",350000)
	);

	for($r=0; $r<4; $r++)
	{
		for($c=0; $c<4; $c++)
		{
			echo $jsk[$r][$c]." ";
		}
		echo "<br>";
	}
?>