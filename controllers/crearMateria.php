<?php
include("../bd/connection.php");

$codigo = $_POST['codigo'];
$sigla = $_POST['sigla'];
$nombre = $_POST['nombre'];

$sql = "INSERT INTO materia (codigo, sigla, nombre)
VALUES ('$codigo', '$sigla', '$nombre')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../views/indexMaterias.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
