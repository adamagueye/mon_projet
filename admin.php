<?php 
	session_start();

 if ($_SESSION['pseudo']=="admin" AND $_SESSION['choix'] == "admin") {
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
  					<div class="alert alert-success  text-center" role="alert">
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
  				<a href="infopersonne.php" class="btn btn-danger">Lien vers les informations des personnes</a>
  			</div>
  		</div>
  		<br>
  		<div class="row">
  			<div class="col-md-12 text-center">
  				<a href="tableaujeu.php" class="btn btn-success">Lien vers le jeu</a>
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
  