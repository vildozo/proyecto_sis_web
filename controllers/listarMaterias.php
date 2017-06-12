<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$row['codigo']."</td>";
        echo "<td>".$row['sigla']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>
            <form class='ui form' method = 'post' action = '../controllers/eliminarMateria.php'>
              <input name = 'sigla' type = 'hidden' value = ".$row["sigla"].">
              <button type='submit'class= 'ui centered red basic button'>Eliminar</button>
              </form>
            </td>";
        echo "<td>
            <form class='ui form' method = 'post' action = '../controllers/editarMateria.php'>
              <input name = 'codigo' type = 'hidden' value = ".$row["codigo"].">
              <input name = 'sigla' type = 'hidden' value = ".$row["sigla"].">
              <input name = 'nombre' type = 'hidden' value = ".$row["nombre"].">
              <button type='submit' class='ui yellow basic button'>Editar</button>
            </form>
            </td>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
