<?php
	include 'connectdb.php';
	print_r($_POST);

	$whichhosp = $_POST["whichhosp"];
	$updhosp = $_POST["updhosp"];
    $query = 'UPDATE hospital SET HospitalName="' . $updhosp . '" WHERE HospitalCode="' . $whichhosp . '"';
	
	if (!mysqli_query($connection, $query)) {
		echo "Error while trying to update hospital name: " . mysqli_error($connection);
	} else {
		echo "Success: hospital name updated.";
	}
?>