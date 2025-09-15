<?php


	if(isset($_POST['check']))
	{
			echo filesize('../mode.txt');
	}
	elseif(isset($_POST['data']))	
	{
		$data = $_POST['data'];
		echo "The POST data is: " . $data;
		$myfile = fopen("../mode.txt", "w");
		fwrite($myfile, $data);
		fclose($myfile);
	}


?>