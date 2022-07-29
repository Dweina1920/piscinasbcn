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
    <?php include '../components/header.php' ?>
        
        <main>
        <div class="div-img-informacion">
            <img class="img-informacion" src="../img/tipos-de-cloro-para-piscina.jpg" alt="banner"/>
        </div>

        <div class="subidos-recientemente">
          <p class="texto-subidos-recientemente">RESULTADOS</p>
        </div>

        <div class="container-books">
        
         <?php  
         if (!$piscinas_details) {
            echo "No encontrado";
          } else {
           
            foreach($piscinas_details as $key=>$value)
        
          {
          ?>
             <div class="book-box">
            <a href="detailpool.php?id=<?php echo $value['id']?>">
            <div class="div-img-box">
              <img class="img-box" src="<?php echo $value['img']?> " alt="imagen libro" tipe="text"/>
            </div>
            <div class=info-box>
              <p class="titulo-box"><?php echo $value['nombre']?></p>
              <p class="autor-box"><?php echo $value['direccion']?></p>
              <p class="titulo-box"><?php echo $value['precio']?></p>
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

