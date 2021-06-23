<?php
function testing(&$string){
	$string .="and somthing new";
}
$str="This is a String";
testing($str);
echo $str;
?>