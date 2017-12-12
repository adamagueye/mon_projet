<?php 
	session_start();

 if (isset($_SESSION['$pseudo'])) {
 		$message =  "<h1>Bienvenue dans la page calculatrice</h1>";
 	
 }
  else
 {
 	header('Location: index.php');
 }
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
      <form method="POST">
 <div class="row">
   <div class="col-md-6">
        <div class="form-group">
          <label >Nombre 1</label>
          <input type="number" class="form-control" placeholder="Nombre 1" name="nbr1">
        </div>
   </div>
   <div class="col-md-6">
     <div class="form-group">
    <label class="text-center">Nombre 2</label>
    <input type="number" class="form-control" placeholder="Nombre 2" name="nbr2">
  </div>
   </div>
 </div>
    <div class="row">
            <div class="col-md-12 text-center">
                 <div class="form-group">
    <label>Choix</label>
    <select  name="choix" class="form-control">
      <option class="+">+</option>
      <option class="-">-</option>
      <option class="*">*</option>
      <option class="%">%</option>
      <option class="/">/</option>
    </select>
  </div>
            </div>
    </div>
    <div class="row">
            <div class="col-md-12 text-center">
              <button class="btn btn-info" name="submit">Calculer</button>
            </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">
          <div class="alert alert-danger" role="alert">
            <?php
                  if (isset($messages)) {
                    echo $messages;
                  }
             ?>
          </div>
      </div>
    </div>
</form>
  </body>
  </html>