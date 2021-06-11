<?php

include 'Conexion2.php';

$Usuario = $_POST["Usuario"];
$Clave = $_POST["Clave"];

$Insertar = "INSERT INTO Clientes (Usuario,Clave) VALUES('$Usuario','$Clave')";

$Resultado = mysqli_query($Conexion, $Insertar);

if(!$Resultado)
{
    echo 'ERROR!!';
}
else
{
    echo 'Usuario registrado';
    header("Location: index.html");
}

mysqli_close($Conexion);

?>