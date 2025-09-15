function checkStatus()
{
	$.post('./includes/functions.php',{check: '1'}, function(result)
	{
		if((result) > 0)
		{
			document.getElementById('mode').id = "modeOn";
			document.getElementById('modeOn').innerHTML = "NIGHT MODE ON";
			console.log(result);
		}
		else if((result) == 0)
		{
			document.getElementById('mode').id = "modeOff";
			document.getElementById('modeOff').innerHTML = "NIGHT MODE OFF";
		}

	});
}

function modeToggle()
{
	var e = document.getElementById('select');
	var value = e.options[e.selectedIndex].value;
	
	if(value == "ON")
	{
		document.getElementById('modeOff').id = "modeOn";
		document.getElementById('modeOn').innerHTML = "NIGHT MODE ON";
		$.post('./includes/functions.php',{data: '0056'}, function(result)
			{
				console.log(result);
			}); //end post function
	}
	else if(value == "OFF")
	{
		document.getElementById('modeOn').id = "modeOff"
		document.getElementById('modeOff').innerHTML = "NIGHT MODE OFF";
		$.post('./includes/functions.php',{data: ''}, function(result)
			{
				console.log(result);
			}); //end post function
	}
}