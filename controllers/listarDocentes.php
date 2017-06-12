<table class="ui celled table">
  <thead>
    <tr>
      <th>Ci</th>
      <th>Nombre</th>
      <th>Apellido</th>
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
          echo "<td><a href=#>Editar</a></td>";
        }
        $conn->close();
    ?>
  </tbody>
</table>
