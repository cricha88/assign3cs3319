<?php
	include 'connectdb.php';
	print_r($_POST);

	$whichhosp = $_POST["whichhosp"];
	$updhosp = $_POST["updhosp"];
    $query = 'UPDATE hospital SET HospitalName="' . $updhosp . '" WHERE HospitalCode="' . $whichhosp . '"';
	if (!mysqli_query($connection, $query)) {
		die ("Error while trying to delete doctor.". mysqli_error($connection));
	} else {
		header('Location: index.php'); //send back to index page once it is done
		exit;
	}
?>