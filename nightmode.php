<?php

$myfile = fopen("mode.txt", "r");
echo fread($myfile, filesize("mode.txt"));
fclose($myfile);

?>