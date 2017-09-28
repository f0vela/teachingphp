<?php

include('conexion.php');

$titulo = $_POST['titulo'];
$receta = $_POST['receta'];
//$imagen = $_FILE['imagen'];

$fecha = date('Y-m-d H:i:s');

$res = $conn->query("INSERT recetas (titulo,receta,fecha) VALUES ('$titulo','$receta','$fecha')");

//var_dump($res);

header("location: recetas_crear.php");

?>