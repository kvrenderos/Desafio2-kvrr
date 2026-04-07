<?php require_once __DIR__ . '/../app/models/Producto.php'; $p = Producto::getById($_GET['id']); ?>
<form method="POST" action="app/controllers/ProductoController.php">
<input type="hidden" name="id" value="<?= $p['id'] ?>">
<input name="nombre" value="<?= $p['nombre'] ?>">
<button name="actualizar">Actualizar</button>
</form>