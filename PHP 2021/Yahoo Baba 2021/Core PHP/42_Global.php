<?php
$x=10;
function wow(){
	global $x;
	echo "Value is inside: ".$x;
}
wow();
echo "Value is outside: ".$x;
?>