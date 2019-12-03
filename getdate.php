<?php
	// Get what date the user selected
	$licdate = $_POST["licdate"];
	
	// Write and execute query
	$query = 'SELECT * FROM doctor WHERE LicenseDate < "' . $licdate . '"';
	$result = mysqli_query($connection, $query);

	// If query fails, die
	if (!$result) {
	 	die("databases query on doctors before license date failed. ");
	}

	// If not, create table to show all doctors info from before the selected date
	echo "<table class='table table-hover'>";
	echo "<th>First Name</th><th>Last Name</th><th>Specialty</th><th>License Date</th>"; 
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>";
	    echo $row["Specialty"] . "</td><td>" . $row["LicenseDate"] . "</td></tr>"; 

	}
	echo "</table>";

	//Free result
	mysqli_free_result($result);
?> 
