<?php
header('content-type: application/json');
$pdo=new PDO("mysql:dbname=sistemas;host=127.0.0.1","root","");

//seleccionar los eventos del calendario
$sentenciaSQL=$pdo->prepare("SELECT * FROM eventos");
$sentenciaSQL->execute();

$resultado= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($resultado);

?>