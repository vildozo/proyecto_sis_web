<?php
include("../bd/connection.php");

$sql = "SELECT sigla, nombre FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='ui relaxed divided list'>
              <div class='item'>
                <i class='tag icon'></i>
                <div class='content'>
                <a class='header'>" . $row["sigla"]. "</a>
                  <div class='description'>"  . $row["nombre"]. "</div>
                </div>
            </div>
            </div>";

    }
} else {
    echo "0 results";
}
$conn->close();
?>
