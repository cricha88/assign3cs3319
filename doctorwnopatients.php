<?php
	include 'connectdb.php';

    $query = 'SELECT *, COUNT(*) from treats';
	$result = mysqli_query($connection, $query);

	if (!$result) {
 		die("Databases query on doctors with no patients failed. ");
	}
	
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)){
		echo '<li>' . $row["FirstName"] . " " . $row["LastName"] . "</li>";
	}
	echo "</ul>";



	mysqli_free_result($result);


?>