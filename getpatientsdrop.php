<?php
    // Write query to get all the paitents and execute
    $query = "SELECT * FROM patient";
    $result = mysqli_query($connection,$query);
    
    // If query fails, die
    if (!$result) {
        die("databases query for patients failed.");
    }
    // If not, display the dropdown selctor of the patients
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["OHIPNumber"]."'>";
      echo $row["OHIPNumber"] . ", " . $row["FirstName"] . " " . $row["LastName"];
      echo "</option>";
   	}

    // Free result
   	mysqli_free_result($result);

?>