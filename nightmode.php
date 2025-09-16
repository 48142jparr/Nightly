<?php

// Open the mode.txt file in read-only mode
// __DIR__ gets the current directory path where this script is located
$myfile = fopen(__DIR__ . "/mode.txt", "r");

// Read the entire content of the file and output it directly to the browser
// filesize() determines how many bytes to read from the file
echo fread($myfile, filesize(__DIR__ . "/mode.txt"));

// Close the file handle to free up system resources
fclose($myfile);

?>