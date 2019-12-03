<?php
    // Write and execute query
    $query = "SELECT * FROM hospital";
    $result = mysqli_query($connection,$query);

    // If query fails, die
    if (!$result) {
        die("databases query for hospitals failed.");
    }

    // If not, fetch all the rows from the query result and display as drop down menu
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["HospitalCode"]."'>";
      echo $row["HospitalName"] . ", " . $row["City"] . ", " . $row["Province"];
      echo "</option>";
   	}

    // Free result
   	mysqli_free_result($result);

?>