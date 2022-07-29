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
  <?php include '../components/header.php' ?>
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
                  <p>★   ❤</p>
                </div>
                <div class="delete-edit">
                  
                  <a href="edit.php?id=<?php echo $row['id']?>">
                  <button class="button-detail">EDITAR</button>
                  </a>
                  
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