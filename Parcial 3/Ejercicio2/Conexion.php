<?php

$server='localhost:3308';
$DB='Gandararara';
$user='root';
$pass='';


try
{
    $conection = new PDO("mysql:host=$server;dbname=$DB",$user,$pass);
    
}
catch(PDOException $exc)
{
    echo "ERROR CON LA CONEXION";
    echo $exc->getMessage();
    exit();
}
?>