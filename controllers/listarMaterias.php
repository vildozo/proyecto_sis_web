<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
            <div class='ui middle aligned divided list'>
              <div class='item'>
                  <i class='tag icon'></i>
                    <div class='right floated content'>
                    <form class='ui form' method = 'post' action = '../controllers/eliminarMateria.php'>
                      <input name = 'sigla' type = 'hidden' value = ".$row["sigla"].">
                      <button type='submit'class= 'ui red basic button'>Eliminar</button>
                    </form>
                    <form class='ui form' method = 'post' action = '../controllers/editarMateria.php'>
                      <input name = 'codigo' type = 'hidden' value = ".$row["codigo"].">
                      <input name = 'sigla' type = 'hidden' value = ".$row["sigla"].">
                      <input name = 'nombre' type = 'hidden' value = ".$row["nombre"].">
                      <button type='submit' class='ui yellow basic button'>Editar</button>
                    </form>
                    </div>
                    <div class='content'>
                      <a class='header' type='text' name='sigla' >" . $row["sigla"]. "</a>
                      <div class='description'>"  . $row["nombre"]. "
                      </div>
                  </div>




              </div>
            </div>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
