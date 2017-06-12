<?php
  include("../bd/connection.php");


  $ci = $_POST['ci'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $grado_academico = $_POST['grado_academico'];
  $estado_laboral = $_POST['estado_laboral'];
  $formacion_academica = $_POST['formacion_academica'];
  $formacion_profesional = $_POST['formacion_profesional'];
  $historial_trabajo = $_POST['historial_trabajo'];


  $sql = "UPDATE docente SET ci='$ci',nombre='$nombre',
  apellido='$apellido',direccion='$direccion',telefono='$telefono',
  grado_academico='$grado_academico',estado_laboral='$estado_laboral',
  formacion_academica='$formacion_academica',formacion_profesional='$formacion_profesional',
  historial_trabajo='$historial_trabajo' Where ci= '$ci'" ;


  if ($conn->query($sql) === TRUE) {
    header("Location: ../views/gestionarDocentes.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
