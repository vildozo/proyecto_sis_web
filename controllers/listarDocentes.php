<?php
    include("../bd/connection.php");
    $sentence = "SELECT * FROM docente WHERE estado_laboral='activo'";
    $result = $conn->query($sentence);
    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['ci']."</td>";
      echo "<td>".$row['nombre']."</td>";
      echo "<td>".$row['apellido']."</td>";
      echo "<td>
            <form class='ui form' action='../views/verDocente.php'>
              <input name='ci' type='hidden' value=".$row['ci'].">
                <button name='ver_docente' type='submit' class='ui orange button'>Ver</button>
              </form>
            </td>";
      echo "<td>
              <form class='ui form' action='../views/editarDocente.php'>
                <input name='ci' type='hidden' value=".$row['ci'].">
                  <button name='editar_docente' type='submit' class='ui positive button'>Editar</button>
                </form>
              </td>";
    }
    $conn->close();
?>
