<?php
	
	$dbc = mysqli_connect('pulse.tcs.tulane.edu', 'wyp', 'Joblucky9', 'wyp')
		or die('Error connecting to MySQL server.');
	
	$first_name = $_POST['firstname'];
	$last_name = $_POST['lastname'];
	$email = $_POST['email'];
	
	$query = "INSERT INTO wyp (first_name, last_name, email) " 
		"VALUES ('$first_name', '$last_name', '$email')";
		
	mysqli_query($dbc, $query)
		or die('Error querying database.');
		
	echo 'Customer added.';	
	
	mysqli_close($dbc);



?>