<?php 
	include"exo.php";
	if (isset($_GET['code'])) {
		extract($_GET);
		if (isset($_POST['submit'])) {
			if
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<body>
	<fieldset>
		<legend align="center">Info. Personne</legend>
		<form method="POST">
		<table>
			<tr>
				<td>Code</td>
				<td><input type="text" disabled="disabled" name="codep" value="<?php echo $code; ?>" ></td>
			</tr>
			<tr>
				<td>Nom</td>
				<td><input type="text" name="nomp" value="<?php echo $nom; ?>"></td>
			</tr>
			<tr>
				<td>Age</td>
				<td><input type="text" name="agep" value="<?php echo $age; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Modifier">
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
</body>
</html>