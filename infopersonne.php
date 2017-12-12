<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="jumbotron text-center jumbotron-fluid"">
		<h3>Profil : 	<?php include"connexion.php";?></h3>
	
		<a href="deconnection.php">Deconnection</a>
		<h1>Infos Personnes</h1>
	</div>
	<?php 
	$tab = array(
		"pers1"=>array("code"=>"001","nom"=>"babacar","age"=>"25"),
		"pers2"=>array("code"=>"002","nom"=>"doudou","age"=>"35"),
		"pers3"=>array("code"=>"003","nom"=>"astou","age"=>"20"),
		"pers4"=>array("code"=>"004","nom"=>"adama","age"=>"19"),
		"pers5"=>array("code"=>"005","nom"=>"lamine","age"=>"21")
	);
?>
	<table class="table table-dark">
		<th>code</th>
		<th>Nom</th>
		<th>Age</th>
		<th></th>
<?php
	foreach ($tab as $cle => $table) {
		echo '<tr align=center>';
		foreach ($table as $key => $value) {
			echo  '<td>'.$value.'</td>';
		}
		?>

		<td><a href="validexo.php?code=<?= $table['code']?>&nom=<?= $table['nom']?>&age=<?= $table['age']?>">Editer</a></td>
		
		<?php

		}
	echo '</tr>';
 ?>
 </tr>
 </table>


</body>
</html>