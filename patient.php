<!DOCTYPE html>
<html>
<head>
	<title>Doctor Database</title>
	<!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navigation bar -->
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Doctor Database</a>
    	</div>
    	<ul class="nav navbar-nav">
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/doctor.php">Doctors</a></li>
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/hospital.php">Hospitals</a></li>
      		<li class="active"><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/patient.php">Patients</a></li>
    	</ul>
  	</div>
</nav>


<?php
	include "connectdb.php";
?>

<div class="container">
	<!-- Patients Page -->
	<h1>Patients</h1>
	<hr>

	<!--Search Patient by OHIP Number-->
	<h2>Search Patient by OHIP Number</h2>
	<form action="" method="post" enctype="">
	<input class="form-control" type="text" name="whichpatient" placeholder="123456789">
	<input class="btn btn-primary" type="submit" value="Search Patient">
	<br/>
	</form>
	<br/>
	<?php 
		if (isset($_POST['whichpatient'])) {	
			include "getpatient.php";
		}
	?>
	<br/>
	<hr>


	<!--Assign doctors to patients-->
	<h2>Assign doctors to patients</h2>
	<form action="" method="post" enctype="mutipart/form-data">
	<!-- Dropdown for all current doctors -->
	<p>Select doctor: </p>
	<select class="form-control" name="whichdocassign" id="whichdocassign">
	  	<?php 
			include "getdoctorsdrop.php";
		?>
	</select>
	<br/><br/>
	<!-- Dropdown for all current patients -->
	<p>Select patient: </p>
	<select class="form-control" name="whichpatassign" id="whichpatassign">
	  	<?php 
			include "getpatientsdrop.php";
		?>
	</select>
	<br/><br/>
	<!-- Button to assign doctors tp patients -->	
	<input class="btn btn-primary" type="submit" value="Assign">
	</form>
	<br/><br/>
	<!-- Place the output from assigndoc.php if posted -->	
	<?php
	if (isset($_POST['whichdocassign']) && isset($_POST['whichpatassign'])) {
		include "assigndoc.php";
	}
	?>
	<br/>
	<hr>
	


	<!--Remove doctors from patients-->
	<h2>Remove doctors from patients</h2>
	<form action="" method="post" enctype="mutipart/form-data">
	<!-- Dropdown for all current doctors -->
	<p>Select doctor: </p>
	<select class="form-control" name="whichdocremove" id="whichdocremove">
	  	<?php 
			include "getdoctorsdrop.php";
		?>
	</select>
	<br/><br/>
	<!-- Dropdown for all current patients -->
	<p>Select patient: </p>
	<select class="form-control" name="whichpatremove" id="whichpatremove">
	  	<?php 
			include "getpatientsdrop.php";
		?>
	</select>
	<br/><br/>
	<!-- Button to remove doctors from patients -->
	<input class="btn btn-primary" type="submit" value="Remove">
	</form>
	<br/><br/>
	<!-- Place the output from removedoc.php if posted -->
	<?php
	if (isset($_POST['whichdocremove']) && isset($_POST['whichpatremove'])) {
		include "removedoc.php";
	}
	?>

	<hr>
</div>

<br/><br/><br/><br/>

<?php
mysqli_close($connection);
?>

</body>
</html>
