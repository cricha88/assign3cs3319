<?php
include 'connectdb.php';
print_r($_POST);
$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$licnum = $_POST["LicenseNumber"];
$spec = $_POST["Specialty"];
$licdate = $_POST["LicenseDate"];
$hospcode = $_POST["whichhosp"];
print_r($hospcode);
//$query= 'INSERT INTO workofart (artname, artist, year, whichmus) VALUES ("' .
//$art .'","' . $artist . '","' . $theyear . '","' . $whichmus . '");';
//if (!mysqli_query($connection,$query)) {
//	die ("Error while trying to add new doctor.". mysqli_error($connection));
//} else {
//	header('Location: index.php'); //send back to index page once it is done
//	exit;
//}
?>