<?php
include("../bd/connection.php");

$sql = "SELECT * FROM docente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    <div class="ui segment">
      <div class="ui two column grid">
        <div class="row">
          <div class="four wide column">
            <img class="ui small image" src="imgs/image.png">
          </div>
          <div class="twelve wide column">
            
             
                    <a href="'../views/verDocente.php'" class="ui header" ><?php echo $row["nombre"]." ".$row["apellido"]; ?></a>
                  </form>
            
          </br>
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
        ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </div>
          </div>
        </div>
      </div>
    <!--Fin Docente-->







 <?php          
    }
} else {
    echo "0 results";
}
$conn->close();
?>