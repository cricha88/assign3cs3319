<?php
    $query = "SELECT HospitalName, FirstName, LastName, StartDate FROM hospital INNER JOIN doctor ON hospital.LicenseNumber=doctor.LicenseNumber ORDER BY HospitalName" . ";";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("databases query on hospital head failed. ");
    }
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<li>";
      echo $row["HospitalName"] . " - Head: " . $row["FirstName"] . ", " . $row["LastName"] . " - Start Date: " . $row["StartDate"];
      echo "</li>";
    }
    echo "</ul>";

    mysqli_free_result($result);
?> 
