<?php
    $query = "SELECT * FROM patient";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query for patients failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["OHIPNumber"]."'>";
      echo $row["OHIPNumber"] . ", " . $row["FirstName"] . ", " . $row["LastName"];
      echo "</option>";
   	}
   	mysqli_free_result($result);

?>