<?php
	include 'connectdb.php';
	
	// Get which doctor to delete, this is their LicenseNumber
	$deldoc = $_POST["deldoc"];
    
    // Write query to check the count of patients the doctor treats
	$querycheck = 'SELECT COUNT(*) from treats WHERE LicenseNumber="' . $deldoc . '"';

	// Write query to delete the doctor
    $querydel = 'DELETE FROM doctor WHERE LicenseNumber="' . $deldoc . '"';

    // If the query checking the count is greater than 0 or the doctor has patients, allow the user to select confirm or cancel
    if (mysqli_fetch_assoc(mysqli_query($connection, $querycheck))["COUNT(*)"] > 0) {
		echo "This doctor has patients, please confirm to delete: <br/>";
		echo "<input type='radio' name='confirmdeldoc' value='" . $deldoc . "'> Confirm Deletion <br/>";
		echo "<input type='radio' name='confirmdeldoc' value='XXXX'> Cancel Deletion <br/>";
		echo "<input type='submit' value='Submit'>";   	
    }
 	// If not, run the delete query to delete the doctor and if it fails, display error message to the screen
	else if (!mysqli_query($connection, $querydel)) {
		echo "Error in deleting the doctor: " . mysqli_error($connection);
	}
	// If it succeeds, the doctor with no patients has been deleted
	else {
		echo "Success: deleted doctor with no patients.";
	}

?>