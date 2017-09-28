<?php

include('conexion.php');

$comentario = $_POST['comentario'];
$receta = $_POST['receta'];

$fecha = date('Y-m-d H:i:s');

$res = $conn->query("INSERT comentarios (receta,comentario,fecha) VALUES ('$receta','$comentario','$fecha')");

header("location: receta.php?id=".$receta);

?>