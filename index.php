<!DOCTYPE html>
<html>
<head>
	<title>Doctor Database</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<?php
	include "connectdb.php";
?>
<h1>Doctor Database</h1>

<!--Search for doctors licensed before given date-->
<hr>
<h2>Search for doctors by sort</h2>
<form action="" method="post">
<p>Sort by First or Last Name:</p>
	<input type="radio" name="sortbyname" value="FirstName">First<br>
	<input type="radio" name="sortbyname" value="LastName">Last<br>
<p>Sort by Ascending or Descending Order:</p>
	<input type="radio" name="sortbytype" value="ASC">Ascending<br>
	<input type="radio" name="sortbytype" value="DESC">Descending<br>

	<p></p>
	<input type="submit" value="Search">

</form>

<br/>
<form action="" method="post">
<?php
if (isset($_POST['sortbyname'])) {	
	include "connectdb.php";
	include "getdoctors.php";
	echo "<br/>";
}
?>
<input type="submit" value="Get More Info">
</form>

<br/>
<?php
if (isset($_POST['whichdoc'])) {
	include "getmore.php";
}
?>

<!--Search for doctors licensed before given date-->
<br/>
<hr>
<h2>Search for doctors by license date</h2>
<form action="" method="post">
<p>Find doctors licensed before given license date:</p>
<input type="date" name="licdate">
<input type="submit" value="Search">
</form>



<br/>
<hr>
<br/><br/><br/><br/>

<?php
mysqli_close($connection);
?>

</body>
</html>
