<?php 
	session_start();

 if ($_SESSION['pseudo'] == "user" AND $_SESSION['choix'] == "user") {
 		$message =  '<h1>Bienvenue chers '.$_SESSION['pseudo'].'</h1>';

 ?>

 <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  </head>
  <body>
  		<div class="row">
  			
  				<div class="jumbotron">
  					<div class="alert alert-success text-center" role="alert">
  						<a href="deconnection.php">Deconnection</a>
  					<?php 
  						if (isset($message)) {
  							echo $message;
  						}
  					 ?>
  				</div>
  				</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12 text-center">
  				<i class="fa fa-calendar-times-o" aria-hidden="true"></i>
  				<a href="datetime.php" class="btn btn-danger">Lien vers la date et l'heure</a>
  			</div>
  		</div>
  		<br>
  		<div class="row">
  			<div class="col-md-12 text-center">
  				<i class="fa fa-calculator" aria-hidden="true"></i>
  				<a  href="calculatrice.php" class="btn btn-success">Lien vers la calculatrice</a>
  			</div>
  		</div>
  </body>
  </html>

 <?php
 	
 }
  else
 {
 	header('Location: index.php');
 }
  ?>
  