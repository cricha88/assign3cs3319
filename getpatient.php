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
      echo "OHIP Number: " . $whichpatient . "<br/>";
      echo "Patient Names: " . mysqli_fetch_field_direct($result, 1) . " ". mysqli_fetch_field_direct($result, 2) . "<br/>";
      echo "Treated by: <br/>";
      echo "<ul>";
      while ($row=mysqli_fetch_assoc($result)) {
	      echo "<li>" . $row["docF"] . " " . $row["docL"] . "</li>";
      }
      echo "</ul>";
   }
   mysqli_free_result($result);
?>
