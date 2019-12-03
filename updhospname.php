<?php
	include 'connectdb.php';

	// Get which hospital to update and what name to update to from user input
	$whichhosp = $_POST["whichhosp"];
	$updhosp = $_POST["updhosp"];
	// Write query
    $query = 'UPDATE hospital SET HospitalName="' . $updhosp . '" WHERE HospitalCode="' . $whichhosp . '"';
	
	// Execute query and if fails, display error 
	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to update hospital name: " . mysqli_error($connection);
	} 
	// If it succeeds, display it succeeded
	else {
		echo "Success: hospital name updated.";
	}
?>