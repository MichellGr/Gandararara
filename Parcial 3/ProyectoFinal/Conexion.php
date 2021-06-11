<?php

$DB='LoginDB';
$server='localhost:3308';
$user='root';
$pass='';


try
{
    $conexion = new PDO("mysql:host=$server;dbname=$DB",$user,$pass);
    
}
catch(PDOException $exc)
{
    echo "ERROR CON LA CONEXION";
    echo $exc->getMessage();
    exit();
}
?>