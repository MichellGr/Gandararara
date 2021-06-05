<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/715/189/png-transparent-pizza-pizza-sticker-sticker-ink-food-sticker.png" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="../Resources/JQuery341/jquery-3.4.1.js"></script>
    <script src="../Resources/jsgrid/jsgrid.js"></script>

	<link rel="stylesheet" href="style.css">

    <title>Ejercicio 2</title>
</head>

    <div class="header">
        <h1>Bienvenido al inicio!!</h1>
    </div>

<body>           
    
    <div class="container-table">
    <div class="table_title">Datos de los clientes del dia</div>
    <div class="table_header">Nombre</div>
    <div class="table_header">Direccion</div>
    <div class="table_header">Colonia</div>
    <div class="table_header">Referencias</div>
    <div class="table_header">Total por pagar</div>


    <?php

include "Conexion.php";

    $consultaSelect="SELECT * FROM  Clientes";
    $consulta=$conection->prepare($consultaSelect);
    $consulta->execute();
    
    while($registro = $consulta->fetch())
    {?>
        <div class="table_item"> <?php echo $registro["Nombre"]; ?> </div>
        <div class="table_item"> <?php echo $registro["Direccion"]; ?> </div>
        <div class="table_item"> <?php echo $registro["Colonia"]; ?> </div>
        <div class="table_item"> <?php echo $registro["Referencias"]; ?></div>
        <div class="table_item"> <?php echo $registro["TotalPorPagar"]; ?> </div>

    <?php
    }
     $consulta->closeCursor();?>

 
    </div>
</body>
</html>