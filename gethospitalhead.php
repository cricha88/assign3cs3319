<?php
    $query = "SELECT HospitalName, FirstName, LastName, StartDate FROM hospital INNER JOIN doctor ON hospital.LicenseNumber=doctor.LicenseNumber ORDER BY HospitalName" . ";";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("databases query on hospital head failed. ");
    }
    echo "<table class='table table-hover'>";
    echo "<th>Hospital Name</th><th>First Name</th><th>Last Name</th><th>Start Date</th>"; 
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>" . $row["HospitalName"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["StartDate"] . "</td></tr>"; 
    }
    echo "</table>";

    mysqli_free_result($result);
?> 
