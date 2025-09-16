<?php

// Open the mode.txt file in read-only mode
// __DIR__ gets the current directory path where this script is located
$myfile = fopen(__DIR__ . "/mode.txt", "r");

// Get the file size to determine how much to read
$filesize = filesize(__DIR__ . "/mode.txt");

// Check if file has content before attempting to read
if ($filesize > 0) {
    // Read the entire content of the file and output it directly to the browser
    echo fread($myfile, $filesize);
} else {
    // If file is empty, output nothing (or could output a default value like "0")
    echo "";
}

// Close the file handle to free up system resources
fclose($myfile);

?>