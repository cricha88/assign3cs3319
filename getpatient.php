<?php
   $whichpatient = $_POST["whichpatient"];
   $query = 'SELECT patient.OHIPNumber, patient.FirstName as patF, patient.LastName as patL, doctor.FirstName as docF, doctor.LastName as docL FROM patient INNER JOIN treats ON patient.OHIPNumber=treats.OHIPNumber INNER JOIN doctor ON treats.LicenseNumber=doctor.LicenseNumber WHERE treats.OHIPNumber="' . $whichpatient . '"';

   $result=mysqli_query($connection,$query);
   if (!$result) {
         die("Database query to get patient info failed.");
   }
   else if (mysqli_fetch_assoc($result)["OHIPNumber"] == '') {
      echo "Error: Please enter an OHIP number that exists.";
   }
   else {
      echo "OHIP Number: " . mysqli_fetch_assoc($result)["OHIPNumber"] . "<br/>";
      echo "Name: " . mysqli_fetch_assoc($result)["patF"] . " " . mysqli_fetch_assoc($result)["patL"] . "<br/>";
      echo "Treated by: <br/>";
      echo "<ul>";
      while ($row=mysqli_fetch_assoc($result)) {
	      echo "<li>" . $row["docF"] . " " . $row["docL"] . "</li>";
      }
      echo "</ul>";
   }
   mysqli_free_result($result);
?>
