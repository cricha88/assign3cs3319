<?php
	include 'connectdb.php';
	$deldoc = $_POST["deldoc"];
    $query = 'DELETE FROM doctor WHERE LicenseNumber="' . $deldoc . '"';

	if (!mysqli_query($connection, $query)) {
		echo "This doctor has patients, please confirm to delete: "
		echo "<input type='radio' name='confirmdeldoc' value='" . $deldoc . "'> Confirm Deletion <br/>";
		echo "<input type='radio' name='confirmdeldoc' value=''> Cancel Deletion <br/>";
		echo "<input type='submit' value='Submit'>'";
	}
	else {
		echo "Success: deleted doctor.";
	}

?>