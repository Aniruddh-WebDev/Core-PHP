<?php
$name="user";
$value="Aniruddh Ratanpara";

setcookie($name,$value,time()+(89865* 30),"/");

if(!isset($_COOKIE[$name]))
{
	echo "Cookies not Set.....";
}
else
{
	echo "Cookies Start: ".$_COOKIE[$name];
}
?>