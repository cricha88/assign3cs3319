<?php
   $whichpatient = $_POST["whichpatient"];
   $query = 'SELECT * FROM patient INNER JOIN treats ON patient.OHIPNumber=treats.OHIPNumber WHERE patient.OHIPNumber="' . $whichpatient . '"';

   $result=mysqli_query($connection,$query);
   if (!$result) {
         die("Database query to get patient info failed.");
   }
   else if (mysqli_fetch_assoc($result)["OHIPNumber"] == '') {
      echo "Enter an OHIPNumber that exists.";
   }
   else {
      echo "<table class='table table-hover'>";
      echo "<th><th>Doctor First Name</th><th>Doctor Last Name</th>"; 
      while ($row=mysqli_fetch_assoc($result)) {
	     echo "<tr><td>" . $row["FirstName"] . " " . $row["LastName"] . "</td><td>";
	     echo $row["LicenseNumber"] . "</td><td>" . $row["Specialty"] . "</td><td>" . $row["LicenseDate"] . "</td><td>";
        echo $row["HospitalCode"] . "</td><td>" . $row["HospitalName"] . "</td></tr>"; 
      }
      echo "</table>";
   }
   mysqli_free_result($result);
?>
