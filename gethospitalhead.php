<?php
    $query = "SELECT * FROM hospital ORDER BY HospitalName" . ";";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("databases query on hospital head failed. ");
    }
    echo "<ul>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<li>";
      echo $row["HospitalName"] . ", " . $row["HospitalName"];
      echo "</li>";
    }
    echo "</ul>";

    mysqli_free_result($result);
?> 
