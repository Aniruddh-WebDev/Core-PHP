<?php

header("content-type: application/mp4");
header("content-Disposition: attachment;filename=avadh.mp4");
header("pragma: no-cache");
header("Expires: 0");
readfile("avadh.mp4");
exit;

?>