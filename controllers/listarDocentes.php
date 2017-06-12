<table class="ui celled table">
  <thead>
    <tr>
      <th>Ci</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
      include("../bd/connection.php");
      $sentence = "SELECT * FROM docente";
      $result = $conn->query($sentence);
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>".$row['ci']."</td>";
          echo "<td>".$row['nombre']."</td>";
          echo "<td>".$row['apellido']."</td>";
          echo "<td>
                  <form class='ui form' action='../controllers/verDocente.php'>
                    <input name='ci' type='hidden' value=".$row['ci'].">
                    <button name='ver_docente' type='submit' class='ui orange button'>Ver</button>
                  </form>
                </td>";
          echo "<td><a href=#>Editar</a></td>";
        }
        $conn->close();
    ?>
  </tbody>
</table>
