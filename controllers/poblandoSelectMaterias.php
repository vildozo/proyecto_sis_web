<?php
include("../bd/connection.php");

$sql = "SELECT * FROM materia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
?>
  
<select  name="materia">
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
    	<option value="<?php echo $row['codigo'];?>">
    		<?php echo $row["nombre"]; ?>
    	</option>
    <?php
    } 
    ?>
</select>
<?php
} 
?>