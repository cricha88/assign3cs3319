<?php
	include 'connectdb.php';
	print_r($_POST);
	
	$fname = $_POST["FirstName"];
	$lname = $_POST["LastName"];
	$licnum = $_POST["LicenseNumber"];
	$spec = $_POST["Specialty"];
	$licdate = $_POST["LicenseDate"];
	$hospcode = $_POST["whichhosp"];
	$query= 'INSERT INTO doctor (LicenseNumber, FirstName, LastName, Specialty, LicenseDate, HospitalCode) VALUES ("' .
	$licnum .'","' . $fname . '","' . $lname . '","' . $spec . '","' . $licdate . '","' . $hospcode . '");';
	if (!mysqli_query($connection, $query)) {
		header('Location: doctor.php');
		echo "Error on adding new doctor, please enter all fields correctly <br/>";
		die();
	} else {
		header('Location: doctor.php'); //send back to index page once it is done
		exit;
	}
?>
