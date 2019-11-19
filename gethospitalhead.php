<?php
    $query = "SELECT * FROM hospital ORDER BY HospitalName" . ";";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("databases query on hospital head failed. ");
    }

    while($row = mysqli_fetch_assoc($result)){
      echo "<option value='".$row["HospitalCode"]."'>";
      echo $row["HospitalName"] . ", " . $row["HospitalName"];
      echo "</option>";
    }

    mysqli_free_result($result);
?> 
