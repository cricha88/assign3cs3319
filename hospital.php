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

<!-- Navigation bar current page is hospitals -->
<nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    	<div class="navbar-header">
      	<a class="navbar-brand" href="#">Doctor Database</a>
    	</div>
    	<ul class="nav navbar-nav">
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/doctor.php">Doctors</a></li>
      		<li class="active"><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/hospital.php">Hospitals</a></li>
      		<li><a href="http://cs3319.gaul.csd.uwo.ca/vm125/a3anne/patient.php">Patients</a></li>
    	</ul>
  	</div>
</nav>

<!-- Connect to database -->
<?php
	include "connectdb.php";
?>

<div class="container">
	<h1>Hospitals</h1>
	<hr>


	<!--Update a hospital name-->
	<h2>Update a Hospital Name</h2>
	<form action="" method="post" enctype="mutipart/form-data">
	Updating: 
	<select class="form-control" name="whichhosp" id="whichhosp">
	  	<?php 
			include "gethospital.php";
		?>
	</select>
	With new hospital name: 
	<input class="form-control" type="text" name="updhosp">
	<input class="btn btn-primary" type="submit" value="Update Hospital Name">
	<br/><br/>
	</form>

	<br/>
	<?php
	if (isset($_POST['whichhosp'])) {
		include "updhospname.php";
	}
	?>
	<br/>
	<hr>


	<!-- List Hospital Info and Head Doctors-->
	<h2>List Hospital Head Doctors</h2>
	  	<?php 
			include "gethospitalhead.php";
		?>
	<br/><br/>

	<hr>

</div>

<br/><br/><br/><br/>


<!-- Close connection to database -->
<?php
mysqli_close($connection);
?>

</body>
</html>
