<?php
	include 'connectdb.php';
	$whichdocremove = $_POST["whichdocremove"];
	$whichpatremove = $_POST["whichpatremove"];
	$query = "DELETE FROM treats WHERE LicenseNumber='" . $whichdocremove . "'AND OHIPNumber= '" .  $whichpatremove . "')";

	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to remove doctor from patient: ". mysqli_error($connection);
	}
	else {
		echo "Success: removed doctor from patient.";
	}

?>