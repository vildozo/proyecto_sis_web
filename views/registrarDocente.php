<!DOCTYPE HTML>

<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="../semantic/dist/semantic.min.js"></script>
	<head>
		<title>Plantel Docente</title>
	</head>

	<body>

	<div class="ui container">
	</br>
		<div class="ui sticky container segment fluid" style="padding-left:0; padding-right:0; padding-bottom:0;">
			<div class="ui two column grid">
				<div class="row">

				<div class="one wide column">
				</div>

				 <div class="three wide column">
					 <div class="ui small image">
	  					<img src="imgs/logoucb.gif">
						</div>
					</div>

					<div class="eleven wide column">
						<div class="ui massive image">
							<img src="imgs/Ingenieria-de-Sistemas.jpg">
						</div>
					</div>

					<div class="one wide column">
					</div>

				</div>
			</div>
		</div>

		<div class="ui inverted menu" style="margin:auto; background-color: #0B0B3B;">
			<a class="item">Noticias</a>
			<a class="item">Información General</a>
			<a class="active item">Plantel Docente</a>
			<a class="item">Cursos de Formación Continua</a>
		</div>

		<div class="ui segment">
			<center><h2>Registrar Docente</h2></center>
			<br>
			<form class="ui form" method="post" action="../controllers/crearDocente.php">
				<div class="field">
					<div class="four wide field">
						<label>CI</label>
						<div class="ui corner labeled input">
							<input type="number" name="ci" placeholder="Carnet de Identidad">
							<div class="ui corner label">
								<i class="asterisk icon"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Nombre</label>
							<div class="ui corner labeled input">
								<input type="text" name="nombre" placeholder="Nombre">
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
						<div class="field">
							<label>Apellido</label>
							<div class="ui corner labeled input">
								<input type="text" name="apellido" placeholder="Apellido">
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Dirección</label>
							<div class="ui corner labeled input">
								<input type="text" name="direccion" placeholder="Direccion">
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
						<div class="field">
							<label>Teléfono</label>
							<div class="ui corner labeled input">
								<input type="text" name="telefono" placeholder="Teléfono / Celular">
								<div class="ui corner label">
									<i class="asterisk icon"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="two fields">
						<div class="field">
							<label>Grado Académico</label>
							<select class="ui fluid dropdown" name="grado_academico">
								<option value="">Seleccione su grado Académico</option>
							  <option value="licenciado">Licenciado</option>
							  <option value="masterado">Masterado</option>
							  <option value="doctorado">Doctorado</option>
							</select>
						</div>
						<div class="field">
							<label>Estado Laboral</label>
							<select class="ui fluid dropdown" name="estado_laboral">
								<option value="">Seleccione su Estado Laboral</option>
							  <option value="activo">Vigente</option>
							  <option value="inactivo">No Vigente</option>
							</select>
						</div>
					</div>
				</div>
				<br>
				<center>
					<button type="submit" class="positive ui button" name="registrar_docente">Registrar</button>
				</center>
			</form>
		</div>
	</div>
	<script>
		$(document).ready(function (){
			$('.ui.dropdown').dropdown();
		});
	</script>
</br>
	<!--Footer-->
	<div class="ui sticky segment fluid inverted darkgreen vertical footer" style="background-color: #0B0B3B" >
		 <div class="ui aligned container">
			 <div class="ui stackable inverted divided grid">

				 <div class="eight wide column">
				 </div>

				 <div class="eight wide column">
					 <div class="ui segment basic">


						 <h4 class="ui inverted header">Síguenos en:</h4>
						 <div class="ui center aligned segment basic">
							 <a class="ui circular facebook icon button"><i class="facebook icon"></i></a>
							 <a class="ui circular twitter icon button"><i class="twitter icon"></i></a>
							 <button class="ui circular google plus icon button"><i class="google plus icon"></i></button>
							 <button class="ui circular instagram icon button"><i class="instagram icon"></i></button>
							 <button class="ui circular youtube icon button"><i class="youtube icon"></i></button></br>
						 </div>
					 </div>
				 </div>
			 </div>
		 </br></br></br>
			 <div class="ui inverted section divider"></div>
		 </br></br></br></br>
		 </div>
	</div>
 <!--Fin de Footer-->

  </body>
</html>
