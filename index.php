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

<br/>
<hr>
<!--Search for doctors licensed before given date-->
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

<br/>
<hr>
<!--Search for doctors licensed before given date-->
<h2>Search for doctors by license date</h2>
<form action="" method="post">
<p>Find doctors licensed before given license date:</p>
<input type="date" name="licdate">
<input type="submit" value="Search">
</form>

<br/>
<?php
if (isset($_POST['licdate'])) {
	include "getdate.php";
}
?>

<br/>
<hr>
<!--Insert a new doctor-->
<h2>Insert a new doctor:</h2>
<form action="adddoctor.php" method="post" enctype="multipart/form-data">
New Doctor's First Name: <input type="text" name="FirstName"><br/>
New Doctor's Last Name: <input type="text" name="LastName"><br/>
New Doctor's License Number: <input type="text" name="LicenseNumber"><br/>
New Doctor's Specialty: <input type="text" name="Specialty"><br/>
New Doctor's License Date: <input type="date" name=LicenseDate><br/>
New Doctor's Hospital Name: 
<select name="whichhosp" id="whichhosp">
	<option value=""> Select Hospital </option>
  	<?php 
		include "gethospital.php";
	?>
</select><br/>

<input type="submit" value="Insert Doctor">
</form>



<br/>
<hr>
<!--Delete an existing doctor-->
<h2>Delete an existing doctor:</h2>



<hr>
<br/><br/><br/><br/>

<?php
mysqli_close($connection);
?>

</body>
</html>
