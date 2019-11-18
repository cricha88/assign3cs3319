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
New Doctor's First Name: <br/>
<input type="text" name="FirstName"><br/><br/>
New Doctor's Last Name: <br/>
<input type="text" name="LastName"><br/><br/>
New Doctor's License Number: <br/>
<input type="text" name="LicenseNumber"><br/><br/>
New Doctor's Specialty: <br/>
<input type="text" name="Specialty"><br/><br/>
New Doctor's License Date: <br/>
<input type="date" name=LicenseDate><br/><br/>
New Doctor's Hospital Name: <br/>
<select name="whichhosp" id="whichhosp">
	<option value="">Select Hospital</option>
  	<?php 
		include "gethospital.php";
	?>
</select><br/><br/>

<input type="submit" value="Insert Doctor">
</form>



<br/>
<hr>
<!--Delete an existing doctor-->
<h2>Delete an existing doctor:</h2>
<form action="deldoctor.php" method="post" enctype="multipart/form-data">
<select name="deldoc" id="deldoc">
	<option value="">Select Doctor to Delete</option>
  	<?php 
		include "getdoctorstodel.php";
	?>
</select><br/><br/>


<hr>
<br/><br/><br/><br/>

<?php
mysqli_close($connection);
?>

</body>
</html>
