<?php
    $query = "SELECT * FROM doctor";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query for doctors failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["LicenseNumber"]."'>";
      echo $row["LicenseNumber"] . ", " . $row["FirstName"] . " " . $row["LastName"];
      echo "</option>";
   	}
   	mysqli_free_result($result);

?>