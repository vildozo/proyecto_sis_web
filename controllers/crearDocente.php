<?php
  include("../bd/connection.php");

  $nombre_img = $_FILES['imagen']['name'];
  $tipo = $_FILES['imagen']['type'];
  $tamano = $_FILES['imagen']['size'];

  $ci = $_POST['ci'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $grado_academico = $_POST['grado_academico'];
  $estado_laboral = $_POST['estado_laboral'];
  $formacion_academica = $_POST['formacion_academica'];
  $formacion_profesional = $_POST['formacion_profesional'];
  $historial_trabajo = $_POST['historial_trabajo'];

  //Si existe imagen y tiene un tamaño correcto
  if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000))
  {
     //indicamos los formatos que permitimos subir a nuestro servidor
     if (($_FILES["imagen"]["type"] == "image/gif")
     || ($_FILES["imagen"]["type"] == "image/jpeg")
     || ($_FILES["imagen"]["type"] == "image/jpg")
     || ($_FILES["imagen"]["type"] == "image/png"))
     {
        // Ruta donde se guardarán las imágenes que subamos
        $directorio = 'fotos/';
        // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
      }
      else
      {
         //si no cumple con el formato
         echo "No se puede subir una imagen con ese formato ";
      }
  }
  else
  {
     //si existe la variable pero se pasa del tamaño permitido
     if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
  }

  $sql = "INSERT INTO docente (ci, nombre, apellido, direccion, telefono, grado_academico, estado_laboral, formacion_academica, formacion_profesional, historial_trabajo, nombre_foto)
  VALUES ('$ci', '$nombre', '$apellido', '$direccion', '$telefono', '$grado_academico', '$estado_laboral', '$formacion_academica', '$formacion_profesional', '$historial_trabajo', '$nombre_img')";

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      header("Location: ../views/gestionarDocentes.php");
    } else {
      if ($conn->query($sql) === TRUE) {
        header("Location: ../views/gestionarDocentes.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
    }
  }
?>
