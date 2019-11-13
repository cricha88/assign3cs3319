<!DOCTYPE html>
<html>
<head>
	<title>Doctor Database</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>

<?php
	include "connecttodb.php";
?>
<h1>Doctor Database</h1>

<h2>Search for doctors</h2>
<form action="" method="post">
Sort by First or Last Name:
	<input type="radio" name="sortbyname" value="FirstName">First<br>
	<input type="radio" name="sortbyname" value="LastName">Last<br>
Sort by Ascending or Descending Order:
	<input type="radio" name="sortbytype" value="ASC">Ascending<br>
	<input type="radio" name="sortbytype" value="DSC">Descending<br>	

	<input type="submit" value="Search">

</form>
<hr>
<?php
if (isset($_POST['pickamuseum'])){	
	include "connectdb.php";
	include "getdoctors.php";
}
?>
<hr>
</body>
</html>