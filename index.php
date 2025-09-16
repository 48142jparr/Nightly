<!DOCTYPE html>
<html>
    <head>
		<!-- Link to external CSS stylesheet for styling -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		
		<!-- Include jQuery library for AJAX functionality -->
		<script type="text/javascript" src="./js/jquery.js"></script>
		
		<!-- Include custom JavaScript file with application logic -->
		<script src="./js/script.js"></script>
    </head>
    <body>
	
		<!-- Main container div for the night mode interface -->
		<div class='container'>
			<!-- Application logo -->
			<img src='./img/logo.svg'>
			<center>
			<br><br><br><br>
				<!-- Main title of the application -->
				<h1>NIGHT MODE</h1>
				
				<!-- Section header for current mode display -->
				<h3>CURRENT MODE:</h3>
				
				<!-- Paragraph element that will display the current mode status -->
				<!-- This gets populated by JavaScript after checking the mode -->
				<p id='mode'></p>

				<!-- Mode selection interface -->
				<p>SELECT MODE:  
					<!-- Dropdown menu for selecting night mode setting -->
					<select id='select'>
						<option></option>
						<option value='ON'>ON</option>
						<option value='OFF'>OFF</option>
					</select>
				</p>
				<br>
				
				<!-- Button to trigger mode change - calls JavaScript function -->
				<button onclick='modeToggle()'>CHANGE MODE</button>
				
		<!-- JavaScript code that runs when the page loads -->
		<script>
			<!-- Call function to check and display the current mode status -->
			checkStatus();
		</script>	
			</center>
		</div>
    </body>
</html>