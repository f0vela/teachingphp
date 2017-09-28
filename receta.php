<?php

include('conexion.php');

$id = $_GET['id'];

$res = $conn->query("SELECT * FROM recetas WHERE id = $id");

foreach ($res as $r) {
?>

	<div style="border:1px solid #a9a9a9; padding:10px; margin: 5px 5px 10px 5px;">
		<h3><?php echo $r['titulo']; ?></h3>
		<p><?php echo $r['receta']; ?></p>
	</div>

<?php
}
?>

<form method="post" action="guardar_comentario.php">
	<input type="text" name="comentario" value="">
	<input type="hidden" name="receta" value="<?php echo $id; ?>">
	<input type="submit" name="submit" value="guardar comentario">
</form>

<?php
$comentarios = $conn->query("SELECT * FROM comentarios WHERE receta = $id");

foreach ($comentarios as $r) {
?>

	<div style="border:2px solid #938475; border-radius: 10px; padding:10px; margin: 5px 5px 10px 5px;">
		<p><?php echo $r['comentario']; ?></p>
		<small><?php echo $r['fecha'];?></small>
	</div>

<?php
}
?>