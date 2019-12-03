<?php
	include 'connectdb.php';

	//Write and execute query to get the doctors with no patients
    $query =  'SELECT *, COUNT(OHIPNumber) from doctor LEFT JOIN treats ON doctor.LicenseNumber=treats.LicenseNumber GROUP BY doctor.LicenseNumber';
	$result = mysqli_query($connection, $query);

	// If query fails, die
	if (!$result) {
 		die("Databases query on doctors with no patients failed. ");
	}
	
	// If not, iterate through each row of the query output
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)){
		// Only if the row has a count of 0 for OHIPNumber or it has no patients will it be displays in list
		if ($row["COUNT(OHIPNumber)"] == 0) {
			echo '<li>' . $row["FirstName"] . " " . $row["LastName"] . "</li>";
		}
	}
	echo "</ul>";

	// Free result
	mysqli_free_result($result);


?>