<?php
  include("../bd/connection.php");
  $ci = $_GET['ci'];
  $sentence = "SELECT * FROM docente WHERE ci = $ci";
  $result = $conn->query($sentence);
  $row = $result->fetch_assoc();
  $conn->close();
?>
<h3 class="ui horizontal divider header">
  <i class="user icon"</i>Información Básica
</h3>
<table class="ui definition table">
  <tbody>
    <tr>
      <td class="three wide column">CI</td>
      <td><?php echo $row['ci'] ?></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><?php echo $row['nombre'] ?></td>
    </tr>
  </tbody>
</table>
