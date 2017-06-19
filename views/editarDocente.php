
<?php
  include("../bd/connection.php");
  $ci = $_GET['ci'];
  $ci_capturado=$ci;
  $sentence = "SELECT * FROM docente WHERE ci = $ci";
  $result = $conn->query($sentence);
  $row = $result->fetch_assoc();
  $conn->close();
?>

<!DOCTYPE HTML>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
	<script src="semantic/dist/semantic.min.js"></script>

	<head>
		<title>Editar Docente</title>
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


			<!--Docente-->
      <div class="ui segment">
        <h3 class="ui horizontal divider header">
          <i class="user icon"></i>
            Información Básica
        </h3>
        <div class="ui segment">
      <center><h2>Editar Docente</h2></center>
      <br>
      <form class="ui form" method="post" enctype="multipart/form-data" action="../controllers/updateDocente.php">
        <h3 class="ui dividing header">Información Básica</h3>
        <div class="field">
					<label>Foto</label>
					<input name="imagen" size="30" type="file" />
				</div>
        <div class="field">
          <div class="four wide field">
            <label>CI</label>
            <div class="ui corner labeled input">
              <input type="number" name="ci" value="<?php echo $row["ci"];?>" >
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
                <input type="text" name="nombre" value="<?php echo $row["nombre"];?>">
                <div class="ui corner label">
                  <i class="asterisk icon"></i>
                </div>
              </div>
            </div>
            <div class="field">
              <label>Apellido</label>
              <div class="ui corner labeled input">
                <input type="text" name="apellido" value="<?php echo $row["apellido"];?>">
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
                <input type="text" name="direccion" value="<?php echo $row["direccion"];?>">
                <div class="ui corner label">
                  <i class="asterisk icon"></i>
                </div>
              </div>
            </div>
            <div class="field">
              <label>Teléfono</label>
              <div class="ui corner labeled input">
                <input type="text" name="telefono" value="<?php echo $row["telefono"];?>">
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
              <select class="ui fluid dropdown" name="grado_academico" >
                <option value="">Seleccione su grado Académico</option>
                <option
                <?php
                  if(($row["grado_academico"])=="Licenciado"){
                  echo "selected";}
                ?>
                value="Licenciado">Licenciado</option>
                <option
                <?php
                  if(($row["grado_academico"])=="Masterado"){
                  echo "selected";}
                ?>
                value="Masterado">Masterado</option>
                <option
                <?php
                  if(($row["grado_academico"])=="Doctorado"){
                  echo "selected";}
                ?>
                value="Doctorado">Doctorado</option>
              </select>
            </div>
            <div class="field">
              <label>Estado Laboral</label>
              <select class="ui fluid dropdown" name="estado_laboral">
                <option value="">Seleccione su Estado Laboral</option>
                <option
                <?php
                if(($row["estado_laboral"])=="Activo"){
                  echo "selected";}
                ?>
                value="Activo">Vigente</option>
                <option
                 <?php
                if(($row["estado_laboral"])=="Inactivo"){
                  echo "selected";}
                ?>
                value="Inactivo">No Vigente</option>
              </select>
            </div>
          </div>
        </div>
        <h3 class="ui dividing header">Formación Académica</h3>
        <div class="field">
          <textarea rows="2" name="formacion_academica" value=""><?php echo $row["formacion_academica"];?></textarea>
        </div>
        <h3 class="ui dividing header">Formación Profesional</h3>
        <div class="field">
          <textarea rows="2" name="formacion_profesional" value="" ><?php echo $row["formacion_profesional"];?></textarea>
        </div>
        <h3 class="ui dividing header">Historial de Trabajo</h3>
        <div class="field">
          <textarea rows="2" name="historial_trabajo" value=""><?php echo $row["formacion_profesional"];?></textarea>
        </div><br>
        <center>
          <button type="submit" class="positive ui button" name="editar_docente">Actualizar</button>
          <a href='gestionarDocentes.php' class='ui negative button'>Cancelar</a>
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

      </div>
    </div>
  </body>
</html>
