<?php
	// Get what to sort on from the user
	$lastorfirst = $_POST["sortbyname"];
	$ascordsc = isset($_POST["sortbytype"]) ? $_POST["sortbytype"] : 'ASC';

	// Write and execute query
	$query = "SELECT * FROM doctor ORDER BY " . $lastorfirst . ' ' .  $ascordsc . ";" ;
	$result = mysqli_query($connection, $query);
	
	// If query fails, die
	if (!$result) {
	 	die("Databases query on doctors failed.");
	}

	// If not, iterate through results to display each as a radio button with value LicenseNumber but text First and Last name 
	while($row = mysqli_fetch_assoc($result)){
		echo '<input type="radio" name="whichdoc" value="';
		echo $row["LicenseNumber"];
	   	echo '">' . $row["FirstName"] . " " . $row["LastName"] . "<br/>";

	}
	// Free result
	mysqli_free_result($result);
?> 
