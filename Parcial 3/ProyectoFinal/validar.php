<?php
$Usuario = $_POST['Usuario'];
$Clave = $_POST['Clave'];

//Inicio de sesion para mandar el nombre de usuario
session_start();
$_SESSION['Usuario'] = $Usuario;

//conexion a la bd
$Conexion=mysqli_connect("localhost", "root", "", "logindb");
$Consulta="SELECT * FROM Clientes WHERE Usuario='$Usuario' and Clave='$Clave'";
$Resultado=mysqli_query($Conexion, $Consulta);


$Filas=mysqli_num_rows($Resultado);


if($Filas>0)
{
    header("location:home.php");
}
else
{
    echo "Error, intente de nuevo.";
}
mysqli_free_result($Resultado);
mysqli_close($Conexion);
?>