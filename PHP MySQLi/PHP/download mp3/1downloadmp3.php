<?php

header("content-type: application/mp3");
header("content-Disposition: attachment;filename=abc.mp3");
header("pragma: no-cache");
header("Expires: 0");
readfile("abc.mp3");
exit;

?>