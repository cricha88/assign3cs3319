<?php
	include 'connectdb.php';

	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$licnum = $_POST["LicenseNumber"];
	$spec = $_POST["Specialty"];
	$licdate = $_POST["LicenseDate"];
	$hospcode = $_POST["whichhosp"];
	$query= 'INSERT INTO doctor (LicenseNumber, FirstName, LastName, Specialty, LicenseDate, HospitalCode) VALUES ("' .
	$licnum .'","' . $fname . '","' . $lname . '","' . $spec . '","' . $licdate . '","' . $hospcode . '");';

	if (!mysqli_query($connection, $query)) {
		echo "Error on trying to add new doctor: " . mysqli_error($connection) . "<br/>";
	}

?>
