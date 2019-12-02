<?php
	include 'connectdb.php';
	$whichdeldoc = $_POST["confirmdeldoc"];
    $query = 'CASCADE DELETE FROM doctor WHERE LicenseNumber="' . $whichdeldoc . '"';

	if ($whichdeldoc == 9999) {
		echo "Did not delete doctor.";
	}
	else if (!mysqli_query($connection, $query)) {
		echo "Error while trying to delete doctor: ". mysqli_error($connection);
	}
	else {
		echo "Success: deleted doctor.";
	}

?>