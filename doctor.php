<!DOCTYPE html>
<html>
<head>
	<title>Doctor Database</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Using boottstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navigation bar current page is Doctors-->
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Doctor Database</a>
    	</div>
    	<ul class="nav navbar-nav">
      		<li class="active"><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/doctor.php">Doctors</a></li>
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/hospital.php">Hospitals</a></li>
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/patient.php">Patients</a></li>
    	</ul>
  	</div>
</nav>

<!-- Connect to database -->
<?php
	include "connectdb.php";
?>

<div class="container">
	<h1>Doctors</h1>
	<hr>

	<!-- Search for doctors based on search criteria -->
	<h2>Search for doctors by sort</h2>
	<form action="" method="post">
	<p>Sort by First or Last Name:</p>
		<input type="radio" name="sortbyname" value="FirstName">First<br/>
		<input type="radio" name="sortbyname" value="LastName">Last<br/><br/>
	<p>Sort by Ascending or Descending Order:</p>
		<input type="radio" name="sortbytype" value="ASC">Ascending<br/>
		<input type="radio" name="sortbytype" value="DESC">Descending<br/><br/>

		<input class="btn btn-primary" type="submit" value="Search">
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
	<input class="btn btn-primary" type="submit" value="Get More Info">
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
	<input class="form-control" type="date" name="licdate">
	<input class="form-control" type="submit" value="Search">
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
	<h2>Insert a new doctor</h2>
	<form action="" method="post" enctype="multipart/form-data">
		New Doctor's First Name: <br/>
		<input class="form-control" type="text" name="FirstName"><br/><br/>
		New Doctor's Last Name: <br/>
		<input class="form-control" type="text" name="LastName"><br/><br/>
		New Doctor's License Number: <br/>
		<input class="form-control" type="text" name="LicenseNumber"><br/><br/>
		New Doctor's Specialty: <br/>
		<input class="form-control" type="text" name="Specialty"><br/><br/>
		New Doctor's License Date: <br/>
		<input class="form-control" type="date" name="LicenseDate"><br/><br/>
		New Doctor's Hospital Name: <br/>
		<select class="form-control" name="whichhosp" id="whichhosp">
			<?php 
				include "gethospital.php";
			?>
		</select>
		<br/><br/>

		<input type="submit" value="Insert Doctor">
		<br/>
	</form>

	<br/>
	<?php
		if (isset($_POST['LicenseNumber'])) {
			include "adddoctor.php";
		}
	?>
	<br/>
	<hr>


	<!--Delete an existing doctor-->
	<h2>Delete an existing doctor</h2>
	<form action="" method="post" enctype="multipart/form-data">
	<select class="form-control" name="deldoc" id="deldoc">
		<option value="">Select Doctor to Delete</option>
	  	<?php 
			include "getdoctorstodel.php";
		?>
	</select><br/><br/>
	<input class="btn btn-primary" type="submit" value="Delete Doctor">
	</form>

	<br/>
	<form action="" method="post">
	<?php
	if (isset($_POST['deldoc'])) {	
		include "deldoctor.php";
	}
	?>
	</form>

	<?php
	if (isset($_POST['confirmdeldoc'])) {
		include "deldoctorwpatients.php";
	}
	?>
	<br/>
	<hr>


	<!-- View doctors with no patients -->
	<h2>Doctors with no patients</h2>
	<!-- Show doctors with no patients from doctorwnopatients.php -->
	<?php
		include "doctorwnopatients.php";

	?>


	<hr>
</div>

<br/><br/><br/><br/>

<!-- Close connection to database -->
<?php
mysqli_close($connection);
?>

</body>
</html>
