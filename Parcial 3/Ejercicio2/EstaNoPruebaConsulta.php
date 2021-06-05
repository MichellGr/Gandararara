<?php
include("Conexion.php");
$clientes = "SELECT * FROM Clientes" //OJO AQUI EMPIEZAN LOS CAMBIOS


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/715/189/png-transparent-pizza-pizza-sticker-sticker-ink-food-sticker.png" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

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

    $resultado = mysqli_query($Conexion,$clientes);
    while($row=mysqli_fetch_assoc($resultado)) { ?>

    <div class="table_item"> <?php echo $row["Nombre"]; ?> </div>
    <div class="table_item"> <?php echo $row["Direccion"]; ?> </div>
    <div class="table_item"> <?php echo $row["Colonia"]; ?> </div>
    <div class="table_item"> <?php echo $row["Referencias"]; ?></div>
    <div class="table_item"> <?php echo $row["TotalPorPagar"]; ?> </div>

        
    <?php } mysqli_free_result($resultado);?>
 
    </div>
</body>
</html>