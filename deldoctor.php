<?php
	include 'connectdb.php';
	$deldoc = $_POST["deldoc"];
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $deldoc . '"';

	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to delete doctor: " . mysqli_error($connection) . "<br/>";
	}

?>