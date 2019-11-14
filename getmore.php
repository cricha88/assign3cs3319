<?php
   $whichdoc = $_POST["whichdoc"];
   $query = 'SELECT * FROM doctor INNER JOIN hospital ON doctor.HospitalCode=hospital.HospitalCode WHERE doctor.LicenseNumber="' . $whichdoc . '"';

   $result=mysqli_query($connection,$query);
   if (!$result) {
         die("database query to get more doctor info failed.");
     }
   echo "<table>";
   echo "<th>First Name</th><th>Last Name</th><th>License Number</th><th>Specialty</th><th>License Date</th><th>Hospital Code</th><th>Hospital Name</th>"; 
   while ($row=mysqli_fetch_assoc($result)) {
	   echo "<tr><td>" . $row["FirstName"] . "</td><td>" . $row["LastName"] . "</td><td>";
	   echo $row["LicenseNumber"] . "</td><td>" . $row["Specialty"] . "</td><td>" . $row["LicenseDate"] . "</td><td>";
      echo $row["HospitalCode"] . "</td><td>" . $row["HospitalName"] . "</td></tr>"; 
   }
   echo "</table>";
   mysqli_free_result($result);
?>
