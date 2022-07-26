<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "piscinas-barcelona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql= 'SELECT * from piscinas';
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
    <img class="img-logo-header" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0uMXac-Qhq4t9SC-qoVNfX5Sn01_Ms7dQyA&usqp=CAU" alt="logo"></img>
  </div>
  <div class="div-header">
              <input class= "input-navbar" type="text" value="  Buscar..."></input>
              <a class= "button-publicar" href="formulario.php">   +   Publique su piscina</a>
              <button class= "button-filtros">   Filtros</button>

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
   <?php //Entrega de resultados
    while($row = $resultado->fetch_assoc()) {

?>
          <div class="book-box">
            <a href="detailpool.php?id=<?php echo $row['id']?>">
            <div class="div-img-box">
              <img class="img-box" src="<?php echo $row['img']?> " alt="imagen libro"/>
            </div>
            <div class=info-box>
              <p class="titulo-box"><?php echo $row['nombre']?></p>
              <p class="autor-box"><?php echo $row['direccion']?></p>
              <p class="titulo-box"><?php echo $row['precio']?></p>
            </div>
          </div>
        


<?php
      }
    
    $conn->close();
    ?>
    </div>
</body>
</html>