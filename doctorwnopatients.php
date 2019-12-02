<?php
	include 'connectdb.php';

    $query =  'SELECT *, COUNT(OHIPNumber) from doctor LEFT JOIN treats ON doctor.LicenseNumber=treats.LicenseNumber GROUP BY doctor.LicenseNumber';
	$result = mysqli_query($connection, $query);

	if (!$result) {
 		die("Databases query on doctors with no patients failed. ");
	}
	
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)){
		if ($row["COUNT(OHIPNumber)"] == 0) {
			echo '<li>' . $row["FirstName"] . " " . $row["LastName"] . "</li>";
		}
	}
	echo "</ul>";



	mysqli_free_result($result);


?>