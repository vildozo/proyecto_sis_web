<?php
  include("../../bd/connection.php");

  $ci = $_POST['ci'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $grado_academico = $_POST['grado_academico'];
  $estado_laboral = $_POST['estado_laboral'];

  $sql = "INSERT INTO docente (ci, nombre, apellido, direccion, telefono, grado_academico, estado_laboral)
  VALUES ('$ci', '$nombre', '$apellido', '$direccion', '$telefono', '$grado_academico', '$estado_laboral')";

  if ($conn->query($sql) === TRUE) {
    header("Location: ../views/docentes/indexDocentes.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
