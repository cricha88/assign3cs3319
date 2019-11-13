<?php
	$lastorfirst = $_POST["sortbyname"];
	$ascordsc = $_POST["sortbytype"]
	$query = "SELECT * FROM doctor ORDER BY '" . $lastorfirst . $ascordsc . "';";
 $result = mysqli_query($connection, $query);
 if (!$result) {
 	die("databases query on doctors failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while($row = mysqli_fetch_assoc($result)){
	echo "<li>";
	echo $row["FirstName"] . " BY " . $row["LastName"];
	echo "</li>";
}
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
?> 
