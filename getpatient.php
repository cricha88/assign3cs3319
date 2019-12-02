<?php
   $whichpatient = $_POST["whichpatient"];
   $query = 'SELECT patient.OHIPNumber, patient.FirstName as patF, patient.LastName as patL, doctor.FirstName as docF, doctor.LastName as docL FROM patient INNER JOIN treats ON patient.OHIPNumber=treats.OHIPNumber INNER JOIN doctor ON treats.LicenseNumber=doctor.LicenseNumber WHERE treats.OHIPNumber="' . $whichpatient . '"';

   $result=mysqli_query($connection,$query);
   if (!$result) {
         die("Database query to get patient info failed.");
   }
   else if (mysqli_num_rows($result) == 0) {
      echo "Error: Please enter an OHIP number that exists.";
   }
   else {
      echo "<b>Patient OHIP: </b>" . $whichpatient . "<br/>";
      echo "<b>Patient Name: </b>" . mysqli_fetch_object($result)->patF . " " . mysqli_fetch_object($result)->patL . "<br/><br/>";      
      echo "<table class='table table-hover'>";
      echo "<th>Doctor(s)</th>"; 
      while ($row=mysqli_fetch_assoc($result)) {
	      echo "<tr><td>" . $row["docF"] . " " . $row["docL"] . "</td></tr>";
      }

      echo "</table>";
   }
   mysqli_free_result($result);
?>
