<?php
$cookie_name="user";
$cookie_value="Aniruddh Ratanpara";

setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");

if(!isset($_COOKIE[$cookie_name]))
{
	echo "Cookie is not set.....";
}
else
{
	echo $_COOKIE[$cookie_name];	
}


?>