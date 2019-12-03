<?php
	include 'connectdb.php';

	// Get information about new doctor that user has inputted
	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$licnum = $_POST["LicenseNumber"];
	$spec = $_POST["Specialty"];
	$licdate = $_POST["LicenseDate"];
	$hospcode = $_POST["whichhosp"];

	// Write query
	$query= 'INSERT INTO doctor (LicenseNumber, FirstName, LastName, Specialty, LicenseDate, HospitalCode) VALUES ("' .
	$licnum .'","' . $fname . '","' . $lname . '","' . $spec . '","' . $licdate . '","' . $hospcode . '");';

	// Execute query and if it fails, display error message to screen
	if (!mysqli_query($connection, $query)) {
		echo "Error on trying to add new doctor: " . mysqli_error($connection) . "<br/>";
	}
	// If it succeeds, display success
	else {
		echo "Success: added doctor.";
	}

?>
