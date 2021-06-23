<?php
echo "Print Cookies: ".$_COOKIE["user"];
setcookie("user","",time()-(89865* 30),"/");
?>