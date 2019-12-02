<?php
	include 'connectdb.php';
	$whichdocassign = $_POST["whichdocassign"];
	$whichpatassign = $_POST["whichpatassign"];
	$query = "INSERT INTO treats (LicenseNumber, OHIPNumber) VALUES ('" . $whichdocassign . "', '" .  $whichpatassign . "')";

	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to assign doctor to patient: ". mysqli_error($connection);
	}
	else {
		echo "Success: assigned doctor to patient.";
	}

?>