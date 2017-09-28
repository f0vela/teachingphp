<?php
//conexion
include('conexion.php');

//traer los datos de la base de datos
$res = $conn->query("SELECT * FROM recetas ORDER BY fecha DESC");

foreach ($res as $r) {
?>
<!-- DIV QUE SEPARA LAS FILAS DE LAS RECETAS -->
<div style="padding: 5px; border:1px solid #a9a9a9; margin: 10px 5px;">
	<h3><?php echo $r['titulo']; ?></h3>
	<p><?php echo $r['receta']; ?></p>
	<a href="receta.php?id=<?php echo $r['id']; ?>">Ver Receta</a>
</div>

<?php
//cierre del foreach
}

?>