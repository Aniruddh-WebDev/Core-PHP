<?php
$jsk=array(
	array(1,"Krishna","Founder","Founder"),
	array(2,"Aniruddh","Full Stack Dev",250000),
	array(3,"Nikunj","Web Dev",250000),
	array(4,"Viral","Mobile App Dev",350000)
	);

	foreach($jsk as $r)
	{
		foreach($r as $c)
		{
			echo $c." ";
		}
		echo "<br>";
	}
?>