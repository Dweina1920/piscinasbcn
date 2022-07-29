<?php 

include '../services/connection.php';


 $id = $_GET['id'];
 $sql= "SELECT * from piscinas WHERE id=$id";
 $resultado = $conn->query($sql);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../style/style.css">
    <title>Crear</title>
</head>
<body>

<?php include '../components/header.php' ?>

    <div class="pag-venta">

        <h1 class="vent-titulo">SUBIR PISCINA</h1>

        <div class="formulario-venta">
        <?php //Entrega de resultados
    while($row = $resultado->fetch_assoc()) {

?>

        
                <form action="edit-pool.php" method="post">
                    
                    <input   type="text" name="id"  value="<?php echo $row['id']?>" id="" readonly>
                    
                    <input type="text" name="nombre"  value="<?php echo $row['nombre']?>" id="">

                    
                    <input type="text" name="poblacion"  value="<?php echo $row['poblacion']?>" id="">

                   
                    <input type="text" name="direccion" value="<?php echo $row['direccion']?>"id="">

                    
                    <input type="text" name="precio" value="<?php echo $row['precio']?>" id="">

                    
                    <input type="text" name="descripcion" value="<?php echo $row['descripcion']?>" id="">

                    <input class="cov-btn" name="img" type="text" value="<?php echo $row['img']?>" id="">

                    <button class="sub-btn" type="submit">EDITAR</button>
                    

                </form>
            
        

                <?php
      }
    
    $conn->close();
    ?>


                
            </div>
        </div>


    </div>



</body>
</html>