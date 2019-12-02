<?php
	include 'connectdb.php';
	$whichdeldoc = $_POST["confirmdeldoc"];
	if ($whichdeldoc == 9999) {
		echo "Did not delete doctor.";
		exit;
	}
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $whichdeldeldoc . '"';

	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to delete doctor: ". mysqli_error($connection);
	}
	else {
		echo "Success: deleted doctor.";
	}

?>