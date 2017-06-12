<?php
include("../bd/connection.php");

$sql = "SELECT * FROM docente WHERE estado_laboral='activo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="ui segment">
      <div class="ui two column grid">
        <div class="row">
          <div class="four wide column">
            <img class="ui small image" src="../controllers/fotos/<?php echo $row["nombre_foto"] ?>">
          </div>
          <div class="twelve wide column">


                    <a href="#" class="ui header" ><?php echo $row["nombre"]." ".$row["apellido"]; ?></a>
          </br>
              <strong>Formaci&oacute;n Academica:</strong>

              <?php echo $row["formacion_academica"]; ?>

          </br>
              <strong>Historial de Trabajo:</strong>

              <?php echo $row["historial_trabajo"]; ?>
          </div>
          </div>
        </div>
      </div>
    <!--Fin Docente-->







 <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
