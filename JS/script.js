// Function to check the current night mode status from the server
function checkStatus()
{
	// Send AJAX POST request to functions.php with 'check' parameter
	// This requests the current mode status from the server
	$.post('./includes/functions.php',{check: '1'}, function(result)
	{
		// If result is greater than 0, night mode is ON (file has content)
		if((result) > 0)
		{
			// Change the element ID to 'modeOn' for CSS styling
			document.getElementById('mode').id = "modeOn";
			// Update the display text to show night mode is active
			document.getElementById('modeOn').innerHTML = "NIGHT MODE ON";
			// Log the result for debugging purposes
			console.log(result);
		}
		// If result equals 0, night mode is OFF (file is empty or contains 0)
		else if((result) == 0)
		{
			// Change the element ID to 'modeOff' for CSS styling
			document.getElementById('mode').id = "modeOff";
			// Update the display text to show night mode is inactive
			document.getElementById('modeOff').innerHTML = "NIGHT MODE OFF";
		}

	});
}

// Function to toggle night mode based on user selection
function modeToggle()
{
	// Get the dropdown select element
	var e = document.getElementById('select');
	// Get the currently selected value from the dropdown
	var value = e.options[e.selectedIndex].value;
	
	// If user selected "ON", activate night mode
	if(value == "ON")
	{
		// Update the display element ID and text immediately for user feedback
		document.getElementById('modeOff').id = "modeOn";
		document.getElementById('modeOn').innerHTML = "NIGHT MODE ON";
		
		// Send AJAX POST request to save the new mode state to the server
		// '0056' represents the ON state (any non-zero value)
		$.post('./includes/functions.php',{data: '0056'}, function(result)
			{
				// Log server response for debugging
				console.log(result);
			}); //end post function
	}
	// If user selected "OFF", deactivate night mode
	else if(value == "OFF")
	{
		// Update the display element ID and text immediately for user feedback
		document.getElementById('modeOn').id = "modeOff"
		document.getElementById('modeOff').innerHTML = "NIGHT MODE OFF";
		
		// Send AJAX POST request to save the new mode state to the server
		// Empty string represents the OFF state (zero length = false)
		$.post('./includes/functions.php',{data: ''}, function(result)
			{
				// Log server response for debugging
				console.log(result);
			}); //end post function
	}
}