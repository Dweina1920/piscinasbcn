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

<header class="header">
  <div>
    <img class="img-logo-header" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0uMXac-Qhq4t9SC-qoVNfX5Sn01_Ms7dQyA&usqp=CAU" alt="logo"></img>
  </div>
  <div class="div-header">
              <input class= "input-navbar" type="text" placeholder="   Buscar..."></input>
              <a class= "button-publicar" href="home.php">Home</a>
              <a class= "button-filtros" href="crear.php">Crear</a>

  </div>
</header>

    <div class="pag-venta">

        <h1 class="vent-titulo">SUBIR PISCINA</h1>

        <div class="formulario-venta">

        
                <form action="create-pool.php" method="post">
                    
                    <input type="text" name="nombre" placeholder="Nombre de Piscina" id="">

                    
                    <input type="text" name="poblacion" placeholder="Población" id="">

                   
                    <input type="text" name="direccion" placeholder="Dirección" id="">

                    
                    <input type="text" name="precio" placeholder="Precio" id="">

                    
                    <input type="text" name="descripcion" placeholder="Descripción" id="">

                    <input class="cov-btn" name="img" type="text" placeholder="URL de Imagen" id="">

                    <button class="sub-btn" type="submit">Crear</button>
                    

                </form>
            
        

        


                
            </div>
        </div>


    </div>



</body>
</html>