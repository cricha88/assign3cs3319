<?php
	include 'connectdb.php';

	// Get which doc to remove from treating patient from user
	$whichdocremove = $_POST["whichdocremove"];
	$whichpatremove = $_POST["whichpatremove"];
	
	// Write query
	$query = "DELETE FROM treats WHERE LicenseNumber='" . $whichdocremove . "' AND OHIPNumber= '" .  $whichpatremove . "' ";

	// Execute query and if it fails, display error message
	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to remove doctor from patient: ". mysqli_error($connection);
	}
	// If it succeeds, display success
	else {
		echo "Success: removed doctor from patient.";
	}

?>