<?php
	$licdate = $_POST["licdate"];
	$query = 'SELECT * FROM doctor WHERE LicenseDate < "' . $licdate . '"';

$result = mysqli_query($connection, $query);
if (!$result) {
 	die("databases query on doctors before license date failed. ");
}

echo "<table class='table table-hover'>";
echo "<th>First Name</th><th>Last Name</th><th>Specialty</th><th>License Date</th>"; 
while($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>";
    echo $row["Specialty"] . "</td><td>" . $row["LicenseDate"] . "</td></tr>"; 

}
echo "</table>";

mysqli_free_result($result);
?> 
