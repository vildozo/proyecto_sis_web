<?php
  include("../bd/connection.php");
  $codigo = $_POST["codigo"];
  $sigla = $_POST["sigla"];
  $nombre = $_POST["nombre"];

  echo "<div class='ui segment'>
          <center><h2>Editar Materia</h2></center>
          </br>
          <form  class='ui form' method='post' action='../controllers/updateSubject.php'>
            <div class='field'>
                <label>Código: $codigo</label>
                <input type='hidden' name='codigo' value = \"$codigo\">
            </div>
            <div class='field'>
              <label>Sigla</label>
              <input type='text' name='sigla' value = \"$sigla\">
            </div>
            <div class='field'>
              <label>Nombre</label>
              <input type='text' name='nombre' value = \"$nombre\">
            </div>
            <center>
              <button type='submit' class= 'positive ui button' name='submit'>Aceptar</button>
              <a href='gestionarMaterias.php' class='ui negative button'>Cancelar</a>
            </center>
          </form>
        </div>




        ";


?>
