<?php
	include 'connectdb.php';
	print_r($_POST);

	$deldoc = $_POST["deldoc"];
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $deldoc . '"';
	if (!mysqli_query($connection, $query)) {
		die ("Error while trying to add new doctor.". mysqli_error($connection));
	} else {
		header('Location: index.php'); //send back to index page once it is done
		exit;
	}
?>