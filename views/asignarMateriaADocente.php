<!DOCTYPE html>
<html>
<head>
	<title>Asignar a Docente Materia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>
</head>
<body>
	<h2>Asignar a Docente Materia</h2>
	<form method="POST" action="../controllers/crearAsignacion.php">
		<table class="ui celled table">
			<tr>
				<td>
					<strong> Docente:</strong><?php  include("../controllers/poblandoSelectDocente.php"); ?>
				</td>
				<td>
					<strong> Materia:</strong><?php include("../controllers/poblandoSelectMaterias.php"); ?>
				</td>
				<td>
					<button type="submit" class="positive ui button" name="editar_docente">Asignar</button>
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>
