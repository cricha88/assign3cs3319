<?php
   // Get which patient the user entered
   $whichpatient = $_POST["whichpatient"];
   
   // Write query to select information on who treats this patient
   $query = 'SELECT patient.OHIPNumber, patient.FirstName as patF, patient.LastName as patL, doctor.FirstName as docF, doctor.LastName as docL FROM patient INNER JOIN treats ON patient.OHIPNumber=treats.OHIPNumber INNER JOIN doctor ON treats.LicenseNumber=doctor.LicenseNumber WHERE treats.OHIPNumber="' . $whichpatient . '"';
   
   // Execute query
   $result=mysqli_query($connection,$query);
  
   // If query fails, die  
   if (!$result) {
         die("Database query to get patient info failed.");
   }
   // If they entered a non-existent OHIP number, display that number does not exist
   else if (mysqli_num_rows($result) == 0) {
      echo "Error: Please enter an OHIP number that exists.";
   }
   // If not, display a table of the patient and all their doctors
   else {
      echo "<table class='table table-hover'>";
      echo "<th>Patient</th><th>Doctor</th>"; 
      while ($row=mysqli_fetch_assoc($result)) {
	      echo "<tr><td>" . $row["patF"] . " " . $row["patL"] . "</td><td>" . $row["docF"] . " " . $row["docL"] . "</td></tr>";
      }
      echo "</table>";
   }

   // Free result
   mysqli_free_result($result);
?>
