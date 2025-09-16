<?php

// This file handles AJAX requests from the frontend JavaScript
// It provides two main functions: checking the current mode and updating the mode

	// Check if this is a status check request (AJAX call with 'check' parameter)
	if(isset($_POST['check']))
	{
		// Return the file size of mode.txt (0 = OFF, >0 = ON)
		// This is used to determine the current night mode status
		echo filesize(__DIR__ . '/../mode.txt');
	}
	// Check if this is a mode update request (AJAX call with 'data' parameter)
	elseif(isset($_POST['data']))	
	{
		// Get the new mode value from the POST data (0 for OFF, 1 for ON)
		$data = $_POST['data'];
		
		// Echo confirmation message (for debugging purposes)
		echo "The POST data is: " . $data;
		
		// Open the mode.txt file in write mode (overwrites existing content)
		$myfile = fopen(__DIR__ . "/../mode.txt", "w");
		
		// Write the new mode value to the file
		fwrite($myfile, $data);
		
		// Close the file handle to save changes and free resources
		fclose($myfile);
	}

?>