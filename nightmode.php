<?php

$myfile = fopen(__DIR__ . "/mode.txt", "r");
echo fread($myfile, filesize(__DIR__ . "/mode.txt"));
fclose($myfile);

?>