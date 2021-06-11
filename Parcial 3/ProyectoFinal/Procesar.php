<?php

include("Conexion2.php");

$id = $_POST["id"];
$Usuario = $_POST["Usuario"];
$Clave = $_POST["Clave"];

//actualizando los datos
$Actualizar = "UPDATE Clientes SET Usuario='$Usuario', Clave='$Clave' WHERE IDCliente='$id'";

$Resultado = mysqli_query($Conexion, $Actualizar);

if(!$Resultado)
{
    echo 'ERROR!!';
}
else
{
    echo 'Se ha actualizado correctamente';
    header("Location: home.php");
}


?>