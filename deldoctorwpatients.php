<?php
	include 'connectdb.php';

	// If the doctor had patients, they confirmed whether they wanted to proceed and which doctor to delete is passed
	$whichdeldoc = $_POST["confirmdeldoc"];
	// Write query to delete the doctor
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $whichdeldoc . '"';

    // If the doctor LicenseNumber was XXXX (or they canceled the delete), do not delete the doctor
	if ($whichdeldoc == 'XXXX') {
		echo "Did not delete doctor.";
	}
	// If the doctor LicenseNumber was an actual LicenseNumber, delete it, and if it fails, display error message
	else if (!mysqli_query($connection, $query)) {
		echo "Error while trying to delete doctor: ". mysqli_error($connection);
	}
	// If it succeeds, display that it deleted the doctor with patients.
	else {
		echo "Success: deleted doctor with patients.";
	}

?>