<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $codigo = $row['codigo'];
        $sigla = $row['sigla'];
        $nombre = $row['nombre'];

        echo "<tr>";
        echo "<td>$codigo</td>";
        echo "<td>$sigla</td>";
        echo "<td>$nombre</td>";
        echo "<td>
            <form class='ui form' method = 'post' action = '../views/editarMateria.php'>
              <input name = 'codigo' type = 'hidden' value = \"$codigo\">
              <input name = 'sigla' type = 'hidden' value = \"$sigla\">
              <input name = 'nombre' type = 'hidden' value = \"$nombre\">
              <button type='submit' class='ui orange button'>Editar</button>
            </form>
            </td>";
        echo "<td>
            <form class='ui form' method = 'post' action = '../controllers/eliminarMateria.php'>
              <input name = 'sigla' type = 'hidden' value = \"$sigla\">
              <button type='submit'class= 'ui centered red button'>Eliminar</button>
            </form>
            </td>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
