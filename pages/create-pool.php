<?php
 include '../services/connection.php';
//Data from Post

$nombre = $_POST['nombre'];
$poblacion = $_POST['poblacion'];
$direccion = $_POST['direccion'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$img = $_POST['img'];

//consulta SQL//
 $sql= "INSERT INTO piscinas (nombre, poblacion, direccion, descripcion, precio, img) VALUES ('$nombre', '$poblacion', '$direccion', '$descripcion', '$precio', '$img')";

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

<header class="header">
  <div>
    <img  class="img-logo-header" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0uMXac-Qhq4t9SC-qoVNfX5Sn01_Ms7dQyA&usqp=CAU" alt="logo"></img>
  </div>
  <div class="div-header">
             
              <input class= "input-navbar" type="text" value="  Buscar..."></input>
              <a class= "button-publicar" href="home.php">Home</a>
              <a class= "button-filtros" href="crear.php">Crear</a>

            

  </div>
</header>


<main>
        <div class="div-img-informacion">
            <img class="img-informacion" src="../img/Piscina-Boadilla.jpg" alt="banner"/>
        </div>

        <div class="subidos-recientemente">
          <p class="texto-subidos-recientemente">Piscinas de Barcelona</p>
        </div>

        <div class="container-books">


      <?php  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
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