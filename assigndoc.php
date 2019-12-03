<?php
	include 'connectdb.php';

	// Get which doc to assign to a patient from user
	$whichdocassign = $_POST["whichdocassign"];
	$whichpatassign = $_POST["whichpatassign"];

	// Write query
	$query = "INSERT INTO treats (LicenseNumber, OHIPNumber) VALUES ('" . $whichdocassign . "', '" .  $whichpatassign . "')";

	// Execute query and if it fails, display error message
	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to assign doctor to patient: ". mysqli_error($connection);
	}
	// If it succeeds, display success
	else {
		echo "Success: assigned doctor to patient.";
	}

?>