<?php

include("Conexion2.php");

$id = $_GET["id"];

//eliminando
$Eliminar = "DELETE FROM Clientes WHERE IDCliente='$id'";

$Resultado = mysqli_query($Conexion, $Eliminar);

if(!$Resultado)
{
    echo 'ERROR!!';
    header("Location: Edicion.php");
}
else
{
    echo 'Se ha eliminado correctamente';
    header("Location: Edicion.php");
}


?>