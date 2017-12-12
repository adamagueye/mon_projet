<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<div class="jumbotron text-center">
		<h3>Profil : 	<?php include"connexion.php";?></h3>
		<a href="deconnection.php">Deconnection</a>
		<h1>Date et Heure</h1>
	</div>
	<dic class="row">
			<div class="md-col-12">
				<div class="alert alert-success text-center" role="alert" >
					
					<h1><?php echo 'Nous sommes le '.date('d-m-Y'). ' et il est : '.date('H:m:s') ?></h1>
				</div>
			</div>
	</dic>
</body>
</html>