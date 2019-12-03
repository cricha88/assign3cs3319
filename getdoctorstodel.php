<?php
    // Write query to get the doctors to delte and execute
    $query = "SELECT FirstName, LastName, doctor.LicenseNumber, Specialty, hospital.HospitalName FROM doctor INNER JOIN hospital ON doctor.HospitalCode=hospital.HospitalCode";
    $result = mysqli_query($connection,$query);
    
    // If the query fails, die
    if (!$result) {
        die("databases query for get doctor for delete failed.");
    }
    // If not, display a dropdown menu of doctors
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='".$row["LicenseNumber"]."'>";
      echo $row["FirstName"] . ", " . $row["LastName"] . ", " . $row["LicenseNumber"]. ", " . $row["Specialty"] . ", " . $row["HospitalName"];
      echo "</option>";
   	}

    // Free the result
   	mysqli_free_result($result);
?>