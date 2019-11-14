<?php
	$lastorfirst = $_POST["sortbyname"];
	$ascordsc = isset($_POST["sortbytype"]) ? $_POST["sortbytype"] : 'ASC';
	$query = "SELECT * FROM doctor ORDER BY " . $lastorfirst . ' ' .  $ascordsc . ";" ;
$result = mysqli_query($connection, $query);
if (!$result) {
 	die("databases query on doctors failed. ");
}

while($row = mysqli_fetch_assoc($result)){
	echo '<input type="radio" name="whichdoc" value="';
	echo $row["LicenseNumber"];
   	echo '">' . $row["FirstName"] . " " . $row["LastName"] . "<br/>";

}

mysqli_free_result($result);
?> 
