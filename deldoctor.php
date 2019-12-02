<?php
	include 'connectdb.php';
	$deldoc = $_POST["deldoc"];
    
	$querycheck = 'SELECT COUNT(*) from treats WHERE LicenseNumber="' . $deldoc . '"';
	$resultcheck = mysqli_query($connection, $querycheck);
    $querydel = 'DELETE FROM doctor WHERE LicenseNumber="' . $deldoc . '"';

    if ($resultcheck > 0) {
		echo "This doctor has patients, please confirm to delete: <br/>";
		echo "<input type='radio' name='confirmdeldoc' value='" . $deldoc . "'> Confirm Deletion <br/>";
		echo "<input type='radio' name='confirmdeldoc' value='XXXX'> Cancel Deletion <br/>";
		echo "<input type='submit' value='Submit'>";   	
    }
 

	else if (!mysqli_query($connection, $querydel)) {
		echo "Error in deleting the doctor: " . mysqli_error($connection);
	}
	else {
		echo "Success: deleted doctor.";
	}

?>