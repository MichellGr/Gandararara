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
	<title>Pagina de edicion</title>
</head>
<body>

	<div class="header">
        <h1>Bienvenido a la pagina de edicion!</h1>
    </div>

	<h2>Nombre de usuario:

	<?php 
	session_start();
      echo $_SESSION["Usuario"];
    ?></h2>



    <div class="container-table container-table-edit">
    <div class="table_title table_title-edit">Edicion de los usuarios </div>
    <div class="table_header">Usuario</div>
    <div class="table_header">Clave</div>
    <div class="table_header">Operacion</div>

    <?php 

    $resultado = mysqli_query($Conexion,$clientes);
    while($row=mysqli_fetch_assoc($resultado)) { ?>

    <div class="table_item"> <?php echo $row["Usuario"]; ?> </div>
    <div class="table_item"> <?php echo $row["Clave"]; ?> </div>

    <div class="table_item">  
    <a href="Actualizar.php?id=<?php echo $row["IDCliente"]; ?>" class="table_item_link">Editar </a>  |  
    <a href="Procesar-Eliminacion?id=<?php echo $row["IDCliente"]; ?>" class="table_item_link" onclick="return confirmacion">Eliminar</a>
    </div>
        
    <?php } mysqli_free_result($resultado);?></div>
 
    <form action = "Volver.php" method = "post">
    <h2>Pagina Principal: <input type ="submit" value ="Volver">  </h2></form>

	<div class="hoover">

	<form action = "Salir.php" method = "post">
	<h2>Cerrar sesion: <input type ="submit" value ="Salir">  </h2></form>

	</div>
	
</body>
</html>