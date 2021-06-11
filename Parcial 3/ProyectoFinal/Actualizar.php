<?php
include("Conexion2.php"); //OJO
$id = $_GET["id"];
$clientes = "SELECT * FROM Clientes WHERE IDCliente = $id";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<link rel="shortcut icon" href="https://w7.pngwing.com/pngs/715/189/png-transparent-pizza-pizza-sticker-sticker-ink-food-sticker.png" type="image/x-icon">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="style2.css">
	<title>Actualizar</title>
</head>
<body>

	<div class="header">
        <h1>Bienvenido a la pagina de actualizaciones!</h1>
    </div>

	<h2>Nombre de usuario:

	<?php 
	session_start();
      echo $_SESSION["Usuario"];
    ?></h2>



    <form class="container-table container-table-edit" action="Procesar.php" method="post">
    <div class="table_title table_title-edit">Edicion de los usuarios </div>
    <div class="table_header">Usuario</div>
    <div class="table_header">Clave</div>
    <div class="table_header">Operacion</div>

    <?php 

    $resultado = mysqli_query($Conexion,$clientes);
    while($row=mysqli_fetch_assoc($resultado)) { ?>

    <input type="hidden" class="table_item" value="<?php echo $row["IDCliente"]; ?>" name="id">  </input>
    <input type="text" class="table_item" value="<?php echo $row["Usuario"]; ?>" name="Usuario">  </input>
    <input type="text" class="table_item" value="<?php echo $row["Clave"]; ?>" name="Clave">  </input>
    <input type="submit" value="Actualizar" class="container_submit">
    
        
    <?php } mysqli_free_result($resultado);?></form>
 
    <form action = "Volver.php" method = "post">
    <h2>Pagina Principal: <input type ="submit" value ="Volver">  </h2></form>

	<div class="hoover">

	<form action = "Salir.php" method = "post">
	<h2>Cerrar sesion: <input type ="submit" value ="Salir">  </h2></form>

	</div>
	
</body>
</html>