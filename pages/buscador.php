<?php
 include '../services/connection.php';

 $sql= 'SELECT * from piscinas';
 $resultado = $conn->query($sql);


 include '../services/connect_test_db.php';
 $searchErr = '';
 $piscinas_details= '';

 if(isset($_POST['search']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("SELECT * from piscinas WHERE nombre like '%$search%' or direccion like '%$search%'");
        $stmt->execute();
        $piscinas_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
    else
    {
        $searchErr = "Please enter the information";
    }
}
$conn->close();
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
        
         <?php  
         if (!$piscinas_details) {
            echo "No encontrado";
          } else {
           
            foreach($piscinas_details as $key=>$value)
        
          {
          ?>
   


            <div class="div-imagen-detail" >
                <img class="imagen-detail" src="<?php echo $value['img']?>" alt="image-book"/>
            </div>

            <div class="box-info-detail">
            <div class="info-info">
                <p class="titulo-detail"><?php echo $value['nombre']?></p>
                <p class="titulo-detail" ><?php echo $value['poblacion']?></p>
                <p><?php echo $value['direccion']?></p>
        
                <p class="titulo-detail"><?php echo $value['precio']?></>
                <p class="description-detail"><?php echo $value['descripcion']?></p>
            </div>
  

            <div class="emoticonos">
                <div>
                  <p>★</p>
                </div>
                <div>
                  
                  <a href="edit.php?id=<?php echo $value['id']?>">
                  <button class="button-detail">EDITAR</button>
                  </a>
                  
                  <a href="delete-pool.php?id=<?php echo $value['id']?>">
                  <button class="button-detail">BORRAR</button>
                  </a>
            </div>
            </div>
            <?php
             }
          }
  
    ?>
    </div>
        

        </main>


    </body>

</html>