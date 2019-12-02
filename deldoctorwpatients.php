<?php
	include 'connectdb.php';
	$whichdeldoc = $_POST["confirmdeldoc"];
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $whichdeldeldoc . '"';

	if (!mysqli_query($connection, $query)) {
		echo "Did not delete doctor.";
	}
	else {
		echo "Success: deleted doctor.";
	}

?>