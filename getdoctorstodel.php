<?php
    $query = "SELECT * FROM doctor INNER JOIN hospital ON doctor.HospitalCode=hospital.HospitalCode";
    $result = mysqli_query($connection,$query);
    if (!$result) {
        die("databases query for get doctor for delete failed.");
    }
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["LicenseNumber"]."'>";
      echo $row["FirstName"] . ", " . $row["LastName"] . ", " . $row["LicenseNumber"]. ", " . $row["Specialty"] . ", " . $row["HospitalName"];
      echo "</option>";
   	}
   	mysqli_free_result($result);
?>