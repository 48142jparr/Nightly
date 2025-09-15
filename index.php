<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script src="./js/script.js"></script>
    </head>
    <body>
	
		<div class='container'>
			<img src='./img/logo.svg'>
			<center>
			<br><br><br><br>
				<h1>NIGHT MODE</h1>
				<h3>CURRENT MODE:</h3>
				<p id='mode'></p>

				<p>SELECT MODE:  
					<select id='select'>
						<option></option>
						<option value='ON'>ON</option>
						<option value='OFF'>OFF</option>
					</select>
				</p>
				<br>
				<button onclick='modeToggle()'>CHANGE MODE</button>
		<script>
			checkStatus();
		</script>	
			</center>
		</div>
    </body>
</html>