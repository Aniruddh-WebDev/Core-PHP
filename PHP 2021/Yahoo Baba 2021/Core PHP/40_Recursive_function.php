<?php
function loop($num){
	if($num <=5){
		echo "$num <br>";
		loop($num+1);
	}
}
loop(1);
?>