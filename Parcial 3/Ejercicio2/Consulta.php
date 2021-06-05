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
  
    <h1>Registros actuales en nuestra base de datos:</h1>
    <br>

    <?php

    include "Conexion.php";

    $consultaSelect="SELECT * FROM  Clientes";
    $consulta=$conection->prepare($consultaSelect);
    $consulta->execute();
    
    while($registro = $consulta->fetch())
    {
         echo $registro["Nombre"]; print "<br>";
         echo $registro["Direccion"]; print "<br>";
         echo $registro["Colonia"];  print "<br>";
         echo $registro["Referencias"]; print "<br>";
         echo $registro["TotalPorPagar"]; print "<br>"; print "<br>";

    
    }
     $consulta->closeCursor();?>

</body>
</html>