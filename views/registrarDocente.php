<?php
	

?>
<!DOCTYPE HTML>

<html>
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="Styles/Estilos.css">
	<script src="semantic/dist/semantic.min.js"></script>

	<head>
		<title>Plantel Docente</title>

		<link rel="stylesheet" type="text/css" href="mystyle.css">
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
		
		<h2>Registrar docente</h2>
		<table>
			<tr>
				<td>Nombre:</td>
				<td>
					<div class="ui corner labeled input">
					  <input placeholder="Nombre" type="text">
					  <div class="ui corner label">
					    <i class="asterisk icon"></i>
					  </div>
					</div>
				</td>
				<td>Apellido:</td>
				<td>
					<div class="ui corner labeled input">
					  <input placeholder="Apellido" type="text">
					  <div class="ui corner label">
					  	<i class="asterisk icon"></i>
					  </div>
					</div>
				</td>
			</tr>

			<tr>
				<td>Direccion</td>
				<td>
					<div class="ui corner labeled input">
					  <input placeholder="Direccion" type="text">
					  <div class="ui corner label">
					  	<i class="asterisk icon"></i>
					  </div>
					</div>
				</td>
				<td>Carnet de Identidad</td>
				<td>
					<div class="ui corner labeled input">
					  <input placeholder="Carnet de Identidad..." type="text">
					  <div class="ui corner label">
					  	<i class="asterisk icon"></i>
					  </div>
					</div>
				</td>
			</tr>

			<tr>
				<td>Grado Academico</td>
				<td>
					<select class="ui fluid search dropdown" multiple="">
					  <option value="">Seleccione su grado Academico</option>
					  <option value="">Licenciado</option>
					  <option value="AL">Masterado</option>
					  <option value="AK">Doctorado</option>
					</select>
				</td>
				<td>Estado Laboral</td>
				<td>
					<div class="ui toggle checkbox">
					  <input name="public" type="checkbox">
					  <label>Docente esta vigente</label>
					</div>
				</td>
			</tr>

			<tr>
				<td>Telefono</td>
				<td></td>
				<td>Celular</td>
				<td></td>
			</tr>

		</table>
		
	</div>

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





