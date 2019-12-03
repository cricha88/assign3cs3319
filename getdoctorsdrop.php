<?php
    // Write query to get all the doctors and execute
    $query = "SELECT * FROM doctor";
    $result = mysqli_query($connection,$query);
    
    // If query fails, die
    if (!$result) {
        die("databases query for doctors failed.");
    }
    // If not, display the dropdown selctor of the doctors
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["LicenseNumber"]."'>";
      echo $row["LicenseNumber"] . ", " . $row["FirstName"] . " " . $row["LastName"];
      echo "</option>";
   	}

    // Free result
   	mysqli_free_result($result);

?>