<?php

$DB='Gandararara';
$user='root';
$pass='';
$server='localhost:3308';

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