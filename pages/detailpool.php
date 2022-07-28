<?php 

include '../services/connection.php';


 $id = $_GET['id'];
 $sql= 'SELECT * from piscinas WHERE id='.$id;
 $resultado = $conn->query($sql);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    
  <link rel="stylesheet" type="text/css" href="../style/style.css" />
  
  
</head>
    <body>
    <header class="header">
  <div>
    <img class="img-logo-header" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0uMXac-Qhq4t9SC-qoVNfX5Sn01_Ms7dQyA&usqp=CAU" alt="logo"></img>
  </div>
  <div class="div-header">
  <input class= "input-navbar" type="text" placeholder="Buscar..."></input>
              <a class= "button-publicar" href="home.php">Home</a>
              <a class= "button-filtros" href="crear.php">Crear</a>

  </div>
</header>
        <main>
        <div class="container-detail">
        <?php //Entrega de resultados
    while($row = $resultado->fetch_assoc()) {

?>
            <div class="div-imagen-detail" >
                <img class="imagen-detail" src="<?php echo $row['img']?>" alt="image-book"/>
            </div>

            <div class="box-info-detail">
            <div class="info-info">
                <p class="titulo-detail"><?php echo $row['nombre']?></p>
                <p class="titulo-detail" ><?php echo $row['poblacion']?></p>
                <p><?php echo $row['direccion']?></p>
        
                <p class="titulo-detail"><?php echo $row['precio']?></>
                <p class="description-detail"><?php echo $row['descripcion']?></p>
            </div>
  

            <div class="emoticonos">
                <div>
                  <p>★</p>
                </div>
                <div>
                  <a href="edit.php?id=<?php echo $row['id']?>" class="button-detail">EDITAR</a>
                  <a href="delete-pool.php?id=<?php echo $row['id']?>">
                  <button class="button-detail">BORRAR</button>
                  </a>
            </div>
            </div>
            <?php
      }
    
    $conn->close();
    ?>
    </div>
        

        </main>


    </body>

</html>