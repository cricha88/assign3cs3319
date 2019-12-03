<?php
    // Write query to get the head of the hospitals and order by hospital name and execute
    $query = "SELECT HospitalName, FirstName, LastName, StartDate FROM hospital INNER JOIN doctor ON hospital.HeadDoc=doctor.LicenseNumber ORDER BY HospitalName" . ";";
    $result = mysqli_query($connection, $query);
    
    // If query fails, die
    if (!$result) {
      die("databases query on hospital head failed. ");
    }

    // If not, create table to display head doctors of each hospital and their start date nicely
    echo "<table class='table table-hover'>";
    echo "<th>Hospital Name</th><th>Head Doctor First Name</th><th>Head Doctor Last Name</th><th>Start Date</th>"; 
    while($row = mysqli_fetch_assoc($result)){
      echo "<tr><td>" . $row["HospitalName"] . "</td><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>" . $row["StartDate"] . "</td></tr>"; 
    }
    echo "</table>";

    // Free result
    mysqli_free_result($result);
?> 
