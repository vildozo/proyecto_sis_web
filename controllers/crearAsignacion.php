<?php
include("../bd/connection.php");

$ci = $_POST['docente'];
$codigo = $_POST['materia'];

$sql = "INSERT INTO materiasDictadas (ci,codigo)
VALUES ('$ci','$codigo')";


if ($conn->query($sql) === TRUE) {
  header("Location: ../views/gestionarMaterias.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>