<?php
include("Conexion2.php"); //OJO
$clientes = "SELECT * FROM Clientes"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="shortcut icon" href="https://w7.pngwing.com/pngs/715/189/png-transparent-pizza-pizza-sticker-sticker-ink-food-sticker.png" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="style2.css">
	<title>Login exitoso</title>
</head>
<body>

	<div class="header">
        <h1>Bienvenido al inicio!!</h1>
    </div>

	<h2>Nombre de usuario:

	<?php 
	session_start();
      echo $_SESSION["Usuario"];
    ?></h2>

	<div class="text">
			
			<div class="Contenido">
				<img src="https://previews.123rf.com/images/dizanna/dizanna1706/dizanna170601210/80855189-bienvenido-bienvenido-en-espa%C3%B1ol-nube-de-palabras-en-diferentes-idiomas-trasfondo-conceptual.jpg">
			</div>
	</div>
    



    <div class="container-table">
    <div class="table_title">Datos de los usuarios <a href="Edicion.php" class="title_edit">Editar</a> </div>
	<div class="table_header">IdUsuario</div>
    <div class="table_header">Usuario</div>
    <div class="table_header">Clave</div>


    <?php 

    $resultado = mysqli_query($Conexion,$clientes);
    while($row=mysqli_fetch_assoc($resultado)) { ?>

	<div class="table_item"> <?php echo $row["IDCliente"]; ?> </div>
    <div class="table_item"> <?php echo $row["Usuario"]; ?> </div>
    <div class="table_item"> <?php echo $row["Clave"]; ?> </div>

        
    <?php } mysqli_free_result($resultado);?></div>
 

	<div class="hoover">

	<form action = "Salir.php" method = "post">
	<h2>Cerrar sesion: <input type ="submit" value ="Salir">  </h2></form>

	</div>
	
</body>
</html>