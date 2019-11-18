<?php
	$query = "SELECT * FROM hospital";
	$result = mysqli_query($connection,$query);
   	if (!$result) {
        die("databases query for hospitals failed.");
    }
    echo "New Doctor's Hospital: </br>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["HospitalCode"]."'>";
      echo $row["HospitalName"];
      echo "</option>";
   	}
   	mysqli_free_result($result);

?>