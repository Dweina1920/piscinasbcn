<?php
 include '../services/connection.php';
//Data from Post
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$poblacion = $_POST['poblacion'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$img = $_POST['img'];


//consulta SQL//
 $sql= "UPDATE piscinas SET nombre='".$nombre."', poblacion='".$poblacion."', direccion='".$direccion."', descripcion='".$descripcion."', precio='".$precio."', img='".$img."' WHERE id=".$id; 

 $resultado = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>

<?php include '../components/header.php' ?>


<main>
        <div class="div-img-informacion">
            <img class="img-informacion" src="../img/Piscina-Boadilla.jpg" alt="banner"/>
        </div>

        <div class="subidos-recientemente">
          <p class="texto-subidos-recientemente">Piscinas de Barcelona</p>
        </div>

        <div class="container-books">


      <?php  if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Has eliminado el anuncio") </script>';
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

  
  ?>

         
        

          <?php
      }
    
    $conn->close();
    ?>
    </div>
          
    </div>
</body>
</html>